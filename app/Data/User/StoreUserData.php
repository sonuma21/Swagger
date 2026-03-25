<?php

namespace App\Data\User;

use App\Enum\UserStatus;

final class StoreUserData
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $password,
        public readonly string $phone,
        public readonly string $designation,
        public readonly string $department,
        public readonly UserStatus $status,
    ) {}
}
