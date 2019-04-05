<?php declare(strict_types=1);

namespace Delvesoft\Profesia\EmailSender;

use DateTime;
use Delvesoft\Profesia\EmailTemplate\Factory\EmailTemplateFactory;
use Delvesoft\Profesia\Repository\DisabledEmailsDatabaseRepository;
use Delvesoft\Profesia\Repository\EmailRecipientRepository;
use Delvesoft\Profesia\Repository\EmailTemplateSentRepository;
use Symfony\Component\Console\Output\OutputInterface;

class DomeliaEmailSender
{
    /** @var EmailRecipientRepository */
    private $emailRecipientRepository;

    /** @var EmailTemplateSentRepository */
    private $emailTemplatesSentRepository;

    /** @var EmailTemplateFactory */
    private $emailTemplateFactory;

    private $emailDisabler;

    /** @var DisabledEmailsDatabaseRepository */
    private $disabledEmailsRepository;

    public function sendEmails(DateTime $fromDate, OutputInterface $output)
    {
        $users              = $this->emailRecipientRepository->getUsersForDomeliaEmail($fromDate);
        $templateType       = 'domelia';
        $alreadySentUserIds = $this->emailTemplatesSentRepository->getUserIdsForSentEmailTemplate(
            $templateType
        );
        $filteredUsers      = array_filter($users, function ($user) use ($alreadySentUserIds) {
            return !in_array($user['user_id'], $alreadySentUserIds);
        });

        $disabledUsersEmail = $this->disabledEmailsRepository->getAll();
        $filteredUsers      = array_filter($filteredUsers, function ($user) use ($disabledUsersEmail) {
            return !in_array($user['e_mail'], $disabledUsersEmail);
        });

        $output->writeln(sprintf('Number of users to send the email to: %s', count($filteredUsers)));

        $emailSentCounter = 0;
        foreach ($filteredUsers as $user) {
            $htmlEmailTemplate = $this->emailTemplateFactory->createEmailTemplate(
                $templateType,
                $user['default_language'],
                $user['channel_id']
            );
            $htmlEmailTemplate->SetUserId($user['user_id']);
            $htmlEmailTemplate->SetEmailVars([
                'link'               => $this->getLocalizedLinkToDomelia($user['channel_id'], $user['default_language']),
                'disable_email_link' => $this->emailDisabler->getLink(
                    $user['e_mail'],
                    $templateType,
                    $user['channel_id'],
                    $user['default_language']
                )
            ]);

            $sent = $htmlEmailTemplate->Send($user['e_mail']);

            if ($sent) {
                $emailSentCounter++;
            }
        }

        $output->writeln(sprintf('Sent emails: %s', $emailSentCounter));
    }
}