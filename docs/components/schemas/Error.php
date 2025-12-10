<?php
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
    /**
     *     @OA\Property(
     *        type="string",
     *        example="Error"
     *     )
     */
    private string $message;
}
