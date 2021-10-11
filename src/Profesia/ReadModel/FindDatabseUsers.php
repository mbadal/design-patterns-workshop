<?php declare(strict_types=1);

namespace Delvesoft\Profesia\ReadModel;

use Carbon\Carbon;
use Delvesoft\Profesia\Entity\User;

class FindDatabaseUsers
{
    /**
     * @param Carbon $dateLimitFrom
     * @param Carbon $dateLimitTo
     *
     * @return User[]
     */
    public function __invoke(Carbon $dateLimitFrom, Carbon $dateLimitTo): array
    {
        return [];
    }
}