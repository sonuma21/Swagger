<?php

namespace Docs\Event;

class IndexEvent
{
    /**
     * @OA\Get(
     *  path = "/v1/events",
     *  summary = "Retrieve a list of events with pagination",
     *  tags = {"Events"},
     *
     * @OA\Parameter(
     *  name = "page",
     *  in = "query",
     *  required = true,
     *  @OA\Schema(type = "integer", example = 1)
     * ),
     * @OA\Parameter(
     *  name = "per_page",
     *  in = "query",
     *  required = true,
     *  @OA\Schema(type = "integer", example = 10)
     * ),
     *
     * @OA\Response(
     *  response = 200,
     *  description = "Fetch paginated list of events",
     *  @OA\JsonContent(ref="#/components/schemas/ListEventResponse")
     * ),
     *
     * @OA\Response(
     *  response = 401,
     *  description = "Unauthorized",
     *  @OA\JsonContent(ref="#/components/schemas/Error")
     * ),
     *
     * @OA\Response(
     *  response = 403,
     *  description = "Forbidden",
     *  @OA\JsonContent(ref="#/components/schemas/Error")
     * ),
     *)
     */
    public function index(): void {}
}
