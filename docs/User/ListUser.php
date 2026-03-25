<?php

declare(strict_types=1);

namespace docs\User;

class ListUser
{
    /**
     *  @OA\Get(
     *     path="/v1/users/list",
     *     summary="List all users",
     *     tags={"Users"},
     *
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     )
     * )
     */
    public function listUsers(): void {}
}
