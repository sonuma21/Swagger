<?php

declare(strict_types=1);

namespace Docs\Auth;

class Logout
{
    /**
     * @OA\Delete(
     *     path="/v1/auth/logout",
     *     summary="User logout",
     *     tags={"Auth"},
     *     security={
     *          {"bearer":{}
     *              },
     * },
     *
     *     @OA\Response(
     *         response=204,
     *         description="User logged out successfully",
     *
     *         @OA\JsonContent(ref="#/components/schemas/NoContent")
     *      ),
     *
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *
     *         @OA\JsonContent(ref="#/components/schemas/Error")
     *      ),
     * )
     */
    public function logout(): void {}
}
