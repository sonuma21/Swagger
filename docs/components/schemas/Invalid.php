<?php

namespace Docs\components\schemas;
/** @OA\Schema(schema = "Invalid") */

class Invalid{

    /** @OA\Property(type="string", example = "Unprocessable Entity"); */
    public string $message;

    /** @OA\Property(type="object",nullable=true,
     * example={
     * "attribute": {"Validation error"},
     * }
     * )
     * */
    public ?object $errors = null;

}
