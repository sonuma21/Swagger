<?php

declare(strict_types=1);

namespace Docs\Event;

class DeleteEvent
{
    /**
     * @OA\Delete(
     *  path = "/v1/events/{event}",
     *  summary = "Delete an event by ID",
     *  tags = {"Events"},
     *
     *  @OA\Parameter(
     *      name = "event",
     *      in = "path",
     *      required = true,
     *
     *      @OA\Schema(type = "integer", example = 1)
     *  ),
     *
     *  @OA\Response(
     *      response = 204,
     *      description = "Event deleted successfully",
     *
     *      @OA\JsonContent(ref="#/components/schemas/NoContent")
     *  ),
     *
     *  @OA\Response(
     *      response = 403,
     *      description = "Forbidden",
     *
     *      @OA\JsonContent(ref="#/components/schemas/Error")
     *  ),
     *
     *  @OA\Response(
     *      response = 404,
     *      description = "Not Found",
     *
     *      @OA\JsonContent(ref="#/components/schemas/NotFound")
     *  )
     * )
     */
    public function delete(): void {}
}
