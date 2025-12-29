<?php

declare(strict_types=1);

namespace Docs\Event;

class UpdateEvent
{
    /** @OA\Put(
     * path = "/v1/events/{event}",
     * summary = "Updating an existing event",
     * tags = {"Events"},
     *
     * @OA\Parameter(
     *     name = "event",
     *     in = "path",
     *     required = true,
     *
     *     @OA\Schema(type = "integer", example = 99)
     * ),
     *
     * @OA\RequestBody(
     *  required = true,
     *
     *  @OA\JsonContent(
     *
     *     @OA\Property(property = "name",type="string",example="Udhauli Chasok Parva"),
     *     @OA\Property(property = "location",type="string",example="Dharan")
     *     )
     * ),
     *
     * @OA\Response(
     *  response = 200,
     *  description = "Event updated successfully",
     *
     *  @OA\JsonContent(ref="#/components/schemas/EventResponse")
     * ),
     *
     * @OA\Response(
     * response = 401,
     * description = "Unauthorized",
     *
     * @OA\JsonContent(ref="#/components/schemas/Error")
     * ),
     *
     * @OA\Response(
     * response = 403,
     * description = "Forbidden",
     *
     * @OA\JsonContent(ref="#/components/schemas/Error")
     * ),
     *
     * @OA\Response(
     * response = 404,
     * description = "Not Found",
     *
     * @OA\JsonContent(ref="#/components/schemas/NotFound")
     * ),
     *
     * @OA\Response(
     * response = 422,
     * description = "Unprocessable Entity",
     *
     * @OA\JsonContent(ref="#/components/schemas/Invalid")
     * ),
     * )
     */
    public function update(): void {}
}
