<?php

namespace docs\User;

class ListUser
{
    /**
     *  @OA\Get(
     *     path="/v1/users",
     *     summary="List all users",
     *     tags={"Users"},
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     )
     * )
     */
    function listUsers(): void
    {
        //
    }
}
