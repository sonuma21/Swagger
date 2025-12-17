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

    /** @OA\Property(example="def502002dec6437fd3e90af64484c9e32...") */
    public string $refreshToken;

    /** @OA\Property(example="120") */
    public string $expiresIn;
}
