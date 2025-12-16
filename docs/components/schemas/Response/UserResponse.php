<?php

declare(strict_types=1);

namespace Docs\Components\Schemas\Response;

/** @OA\Schema(schema="UserResponse") */
class UserResponse
{
    /** @OA\Property(example="eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9...") */
    public string $accessToken;

    /** @OA\Property(example="Asha Spinka V") */
    public string $name;

    /** @OA\Property(example = "lora37@example.com") */
    public string $email;

    /** @OA\Property(example="2026-12-15T07:09:01.000000Z") */
    public string $expiresIn;
}
