<?php

declare(strict_types=1);

namespace Docs\components\schemas;

/** @OA\Schema(schema = "NotFound") */
class NotFound
{
    /** @OA\Property(example = "string"); */
    public string $message;
}
