<?php declare(strict_types=1);

namespace Delvesoft\Profesia\EmailTemplate\Factory;

use Delvesoft\Profesia\EmailTemplate\EmailTemplate;

class EmailTemplateFactory
{
    /**
     * @param string $templateType
     * @param string $defaultLanguage
     * @param int    $channelId
     *
     * @return EmailTemplate
     */
    public function createEmailTemplate(string $templateType, string $defaultLanguage, int $channelId): EmailTemplate
    {
        return new EmailTemplate();
    }
}