<?php

namespace Docs\User;

class DeleteUser
{
    /**
     * @OA\Delete(
     *     path="/v1/users/{id}",
     *     tags={"Users"},
     *     summary="Delete a user by ID",
     *
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID of the user to delete",
     *         @OA\Schema(
     *             type="integer",
     *             format="int64",
     *             example=1
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=200,
     *         description="User deleted successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="User deleted")
     *         )
     *     ),
     *     @OA\Response(response=401, description="Unauthorized", @OA\JsonContent(@OA\Property(property="message", type="string", example="Unauthorized"))),
     *     @OA\Response(response=403, description="Forbidden",    @OA\JsonContent(@OA\Property(property="message", type="string", example="Forbidden"))),
     *     @OA\Response(response=404, description="Not Found",     @OA\JsonContent(@OA\Property(property="message", type="string", example="User not found"))),
     * )
     */
    public function destroy(): void {}
}
