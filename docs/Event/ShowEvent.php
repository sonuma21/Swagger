<?php

declare(strict_types=1);

namespace Docs\Event;

class ShowEvent
{
    /**
     * @OA\Get(
     *  path = "/v1/events/{event}",
     *  summary = "Retrieve event details by ID",
     *  tags = {"Events"},
     *
     * @OA\Parameter(
     *  name = "event",
     *  in = "path",
     *  required = true,
     *
     *  @OA\Schema(type = "integer", example = 99)
     * ),
     *
     * @OA\Response(
     *  response = 200,
     *  description = "Successful",
     *
     *  @OA\JsonContent(ref="#/components/schemas/EventResponse")
     * ),
     *
     * @OA\Response(
     *  response = 401,
     *  description = "Unauthorized",
     *
     *  @OA\JsonContent(ref="#/components/schemas/Error")
     * ),
     *
     * @OA\Response(
     *  response = 403,
     *  description = "Forbidden",
     *
     *  @OA\JsonContent(ref="#/components/schemas/Error")
     * ),
     *
     * @OA\Response(
     *  response = 404,
     *  description = "Not Found",
     *
     *  @OA\JsonContent(ref="#/components/schemas/NotFound")
     * ),
     *)
     */
    public function show(): void {}
}
