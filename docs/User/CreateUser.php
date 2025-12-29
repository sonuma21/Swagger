<?php

declare(strict_types=1);

namespace Docs\User;

class CreateUser
{
    /**
     * @OA\Post(
     *     path="/v1/users",
     *     tags={"Users"},
     *     summary="Create a new user",
     *     security={
     *          {"bearer":{}
     *              },
     * },
     *
     *     @OA\RequestBody(
     *         required=true,
     *
     *         @OA\MediaType(
     *             mediaType="application/json",
     *
     *             @OA\Schema(
     *                 required={"name","email","password"},
     *
     *                 @OA\Property(property="name", type="string", example="John Doe"),
     *                 @OA\Property(property="email", type="string", format="email", example="john@example.com"),
     *                 @OA\Property(property="password", type="string", format="password", example="secret123")
     *             )
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=201,
     *         description="User created successfully",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="message", type="string", example="User created")
     *         )
     *     ),
     *
     *     @OA\Response(response=401, description="Unauthorized", @OA\JsonContent(@OA\Property(property="message", type="string", example="Unauthorized"))),
     *     @OA\Response(response=403, description="Forbidden", @OA\JsonContent(@OA\Property(property="message", type="string", example="Forbidden"))),
     *     @OA\Response(response=422, description="Validation error", @OA\JsonContent(@OA\Property(property="message", type="string", example="Validation error")))
     * )
     */
    public function store(): void {}
}
