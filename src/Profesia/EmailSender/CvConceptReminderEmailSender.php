<?php declare(strict_types=1);

namespace Delvesoft\Profesia\EmailSender;

use Delvesoft\Profesia\EmailTemplate\Factory\EmailTemplateFactory;
use Delvesoft\Profesia\Entity\User;
use Delvesoft\Profesia\ReadModel\FindAlreadySentUserIdsInDatabase;
use Delvesoft\Profesia\ReadModel\FindDatabaseUsers;
use Delvesoft\Profesia\Repository\DisabledEmailsDatabaseRepository;
use Exception;
use Carbon\Carbon;

class CvConceptReminderEmailSender
{
    /** @var EmailTemplateFactory */
    private $emailTemplateFactory;

    /** @var DisabledEmailsDatabaseRepository */
    private $disabledEmailsRepository;

    /** @var FindDatabaseUsers */
    private $findUsers;

    /** @var FindAlreadySentUserIdsInDatabase */
    private $findAlreadySentUserIds;

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

            $htmlEmailTemplate = $this->emailTemplateFactory->createEmailTemplate(
                'Concept-Reminder',
                $user->getDefaultLanguage(),
                $user->getChannelId()
            );
            $htmlEmailTemplate->SetUserId($user->getId());
            $emailVariables = [
                'name' => $user->hasFirstName() ? ", {$user->getFirstName()}" : '',
            ];

            $htmlEmailTemplate->SetEmailVars($emailVariables);

            try {
                $sent = $htmlEmailTemplate->Send($user->getEmailAddress());
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