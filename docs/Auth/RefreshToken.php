<?php

declare(strict_types=1);

namespace Docs\Auth;

class RefreshToken
{
    /**
     * @OA\Post(
     *     path="/v1/auth/token/refresh",
     *     tags={"Auth"},
     *     summary="Generates new access token using refresh token",
     *
     *     @OA\RequestBody(
     *         required=true,
     *
     *         @OA\MediaType(
     *             mediaType="application/json",
     *
     *             @OA\Schema(
     *                 required={"refresh_token"},
     *
     *                 @OA\Property(property="refresh_token", type="string", example="def50200e46f1c845159eed71a8ab9f36c6e26e14dad97eba0bfa46b9e3152513b2f3b7cf5d4ad862639a3c5af7e6394624097d1aa496312998f66ae5ea90ab7b2aa15d5abf6f19c543d6b7a93861f47f42ce0b76c8bed766eca127ef8c8ea1806b26f1838f26d3bf0fa31eab996d62ff78070098880731f498c1ca93f0163998fa516eb3d712bbc164271b02a13d142f9922ebb0abc26205ecff078f0768f2ea78a205b345019f1c4d8cb1c3fde6798cd5a061171ba8b4506f41ff9c8a5da62aedbaf006b6c8d1f9089236e690fb1efb969a77576007dcbe357db7e10fd0cb1067daa3eaffd8ba0ff37d1c58f9c67d051b0a8ebfa758f78b9979ec67dfc5da51548ce5b1b0b8e507f2b9eee521d700e54a9e8f661d58807ee27006434663344c2b55eb97ce874620b145e882db74a59d6535fdcbe1a5a6fc957b50455e6c622c5c4007c1e427752d183a9986632f0aac70efcdd8989c1db46c1c3d4909816cd807a7f05a")
     *             )
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=200,
     *         description="New access token generated successfully",
     *
     *         @OA\JsonContent(ref="#/components/schemas/RefreshTokenResponse")
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
    public function refreshToken(): void {}
}
