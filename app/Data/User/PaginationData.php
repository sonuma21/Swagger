<?php

namespace App\Data\User;

use App\Enum\UserStatus;

final class PaginationData
{
    public function __construct(
        public readonly int $page,
        public readonly int $perPage,
        public readonly string $search,
        public readonly ?UserStatus $status,
        public readonly string $sort,
        public readonly string $order,
    ) {}
}
