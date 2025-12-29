<?php

namespace App\Data\User;

final class RefreshData
{
    public function __construct(
        public readonly string $refreshToken,
    ) {}
}
