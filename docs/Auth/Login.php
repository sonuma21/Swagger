<?php

declare(strict_types=1);

namespace Docs\Auth;

class Login
{
    /**
     * @OA\Post(
     *     path="/v1/auth/login",
     *     tags={"Auth"},
     *     summary="User login",
     *
     *     @OA\RequestBody(
     *         required=true,
     *
     *         @OA\MediaType(
     *             mediaType="application/json",
     *
     *             @OA\Schema(
     *                 required={"email","password"},
     *
     *                 @OA\Property(property="email", type="string", format="email", example="lora37@example.com"),
     *                 @OA\Property(property="password", type="string", format="password", example="password")
     *             )
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=200,
     *         description="User logged in successfully",
     *
     *         @OA\JsonContent(ref="#/components/schemas/UserResponse")
     *      ),
     *
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *
     *         @OA\JsonContent(ref="#/components/schemas/Error")
     *      ),
     *
     *     @OA\Response(
     *         response=422,
     *         description="Unprocessable Entity",
     *
     *         @OA\JsonContent(ref="#/components/schemas/Invalid")
     *      ),
     * )
     */
    public function login(): void {}
}
