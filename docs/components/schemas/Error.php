<?php

declare(strict_types=1);

namespace Docs\components\schemas;

/**
 * @OA\Schema(
 *     schema="Error",
 *     type="object",
 *     description="Error response schema"
 * )
 */
class Error
{
    /** @OA\Property(example="string") */
    private string $message;
}
