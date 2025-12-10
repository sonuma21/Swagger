<?php
namespace Docs\components\schemas\Response;
/**
 * @OA\Schema(
 *     schema="EventResponse",
 *     type="object",
 *     description="Event response schema"
 * )
 */
class EventResponse
{
    /**
     *     @OA\Property(
     *        type="integer",
     *        example=1
     *     )
     */
    private int $id;

    /**
     *     @OA\Property(
     *        type="string",
     *        example="Udhauli Chasok Parva"
     *     )
     */
    private string $name;

    /**
     *     @OA\Property(
     *        type="string",
     *        example="Dharan"
     *     )
     */
    private string $location;
}
