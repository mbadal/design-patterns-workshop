<?php declare(strict_types=1);

namespace Delvesoft\Profesia\Repository;

class EmailTemplateSentRepository
{
    /**
     * @param string $templateType
     *
     * @return array
     */
    public function getUserIdsForSentEmailTemplate(string $templateType): array
    {
        return [];
    }
}