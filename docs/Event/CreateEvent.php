<?php

namespace Docs\Event;

class CreateEvent
{
    /**
     * @OA\Post(
     *  path = "/v1/events",
     *  summary = "Create a new event",
     *  tags = {"Events"},
     *
     * @OA\RequestBody(
     *  required = true,
     *  @OA\JsonContent(
     *     required = {"name","location"},
     *     @OA\Property(property = "name",type="string",example="Udhauli Chasok Parva"),
     *     @OA\Property(property = "location",type="string",example="Dharan")
     *     )
     * ),
     *
     * @OA\Response(
     *  response = 201,
     *  description = "Successful",
     *  @OA\JsonContent(ref="#/components/schemas/EventResponse")
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
     * @OA\Response(
     * response=422,
     * description="Unprocessable Entity",
     * @OA\JsonContent(ref="#/components/schemas/Invalid")
     * )
     *)

     */
    public function store(): void {}
}
