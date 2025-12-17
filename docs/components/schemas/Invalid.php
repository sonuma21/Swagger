<?php

declare(strict_types=1);

namespace Docs\components\schemas;

/** @OA\Schema(schema = "Invalid") */
class Invalid
{
    /** @OA\Property(example = "The attribute field is required.(and 1 more error)"); */
    public string $message;

    /** @OA\Property(type="object",nullable=true,
     * example={"attribute": {"The attribute field is required."},}
     * )
     * */
    public ?object $errors = null;
}
