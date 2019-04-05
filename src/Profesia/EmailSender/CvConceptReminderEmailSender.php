<?php declare(strict_types=1);

namespace Delvesoft\Profesia\EmailSender;

use Delvesoft\DesignPattern\Facade\EmailSenderFacade;
use Delvesoft\Profesia\EmailTemplate\Factory\EmailTemplateFactory;
use Delvesoft\Profesia\Entity\User;
use Delvesoft\Profesia\ReadModel\FindAlreadySentUserIdsInDatabase;
use Delvesoft\Profesia\ReadModel\FindDatabaseUsers;
use Delvesoft\Profesia\Repository\DisabledEmailsDatabaseRepository;
use Exception;
use Carbon\Carbon;

class CvConceptReminderEmailSender
{

    /** @var EmailSenderFacade */
    private $facade;

    /** @var DisabledEmailsDatabaseRepository */
    private $disabledEmailsRepository;

    /** @var FindDatabaseUsers */
    private $findUsers;

    /** @var FindAlreadySentUserIdsInDatabase */
    private $findAlreadySentUserIds;

    /**
     * @param                                  $facade
     * @param DisabledEmailsDatabaseRepository $disabledEmailsRepository
     * @param FindDatabaseUsers                $findUsers
     * @param FindAlreadySentUserIdsInDatabase $findAlreadySentUserIds
     */
    public function __construct(
        $facade,
        DisabledEmailsDatabaseRepository $disabledEmailsRepository,
        FindDatabaseUsers $findUsers,
        FindAlreadySentUserIdsInDatabase $findAlreadySentUserIds
    ) {
        $this->facade = $facade;
        $this->disabledEmailsRepository = $disabledEmailsRepository;
        $this->findUsers = $findUsers;
        $this->findAlreadySentUserIds = $findAlreadySentUserIds;
    }


    /**
     * @param Carbon $dateLimitFrom
     * @param Carbon $dateLimitTo
     *
     * @return int
     */
    public function sendEmails(Carbon $dateLimitFrom, Carbon $dateLimitTo): int
    {
        $users = $this->findUsers->__invoke($dateLimitFrom, $dateLimitTo);

        $alreadySentUserIds = $this->findAlreadySentUserIds->__invoke();
        $disabledUsersEmail = $this->disabledEmailsRepository->findAllAsMap();
        $sentEmailsCount    = 0;

        /** @var User $user */
        foreach ($users as $user) {
            if (isset($disabledUsersEmail[$user->getEmailAddress()])) {
                continue;
            }

            if (isset($alreadySentUserIds[$user->getId()])) {
                continue;
            }

            $emailVariables = [
                'name' => $user->hasFirstName() ? ", {$user->getFirstName()}" : '',
            ];

            try {
                $sent = $this->facade->sendEmail(
                    'Concept-Reminder',
                    $user->getEmailAddress(),
                    $user->getDefaultLanguage(),
                    $user->getChannelId(),
                    $user->getId(),
                    $emailVariables
                );
                if ($sent) {
                    $sentEmailsCount++;
                }
            } catch (Exception $e) {
                $this->logger->error(
                    "Error while sending email. Cause: {$e->getMessage()}",
                    static::formatBacktrace(debug_backtrace())
                );
            }
        }

        return $sentEmailsCount;
    }
}