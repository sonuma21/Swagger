<?php

declare(strict_types=1);

namespace Docs\User;

class ShowUser
{
    /**
     * @OA\Get(
     *     path="/v1/users/{id}",
     *     tags={"Users"},
     *     summary="Get a user by ID",
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the user to retrieve",
     *         required=true,
     *
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *
     *     @OA\Response(
     *         response=200,
     *         description="User retrieved successfully",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="id", type="integer", example=1),
     *             @OA\Property(property="name", type="string", example="John Doe"),
     *             @OA\Property(property="email", type="string", example="john.doe@example.com")
     *        )
     *
     *   ),
     *
     *   @OA\Response(
     *       response=401,
     *      description="Unauthorized",
     *
     *      @OA\JsonContent(
     *
     *        @OA\Property(property="message", type="string", example="Unauthorized")
     *    )
     *  ),
     *
     *   @OA\Response(
     *      response=403,
     *     description="Forbidden",
     *
     *    @OA\JsonContent(
     *
     *       @OA\Property(property="message", type="string", example="Forbidden")
     *   )
     * ),
     *
     *  @OA\Response(
     *     response=404,
     *    description="User not found",
     *
     *   @OA\JsonContent(
     *
     *      @OA\Property(property="message", type="string", example="User not found")
     *   )
     * )
     * )
     */
    public function show(): void {}
}
