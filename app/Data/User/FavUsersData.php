<?php

declare(strict_types=1);

namespace App\Data\User;

final class FavUsersData
{
    public function __construct(
        public readonly array $ids,
    ) {}
}
