<?php declare(strict_types=1);

namespace Delvesoft\DesignPattern\Facade;

use Delvesoft\Profesia\EmailTemplate\Factory\EmailTemplateFactory;

class EmailSenderFacade
{
    /** @var EmailTemplateFactory */
    private $emailTemplateFactory;

    /**
     * @param string $templateType
     * @param string $emailAddress
     * @param string $defaultLanguage
     * @param int    $channelId
     * @param int    $userId
     * @param array  $emailVariables
     *
     * @return bool
     * @throws \Exception
     */
    public function sendEmail(
        string $templateType,
        string $emailAddress,
        string $defaultLanguage,
        int $channelId,
        int $userId,
        array $emailVariables
    ): bool {
        $htmlEmailTemplate = $this->emailTemplateFactory->createEmailTemplate(
            $templateType,
            $defaultLanguage,
            $channelId
        );
        $htmlEmailTemplate->SetUserId($userId);
        $htmlEmailTemplate->SetEmailVars($emailVariables);

        return $htmlEmailTemplate->Send($emailAddress);
    }
}