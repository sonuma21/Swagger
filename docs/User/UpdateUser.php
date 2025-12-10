<?php
namespace Docs\User;
class UpdateUser
{
    /**
     * @OA\Put(
     *     path="/v1/users/{id}",
     *     tags={"Users"},
     *     summary="Update a user by ID",
     *    @OA\Parameter(
     *        name="id",
     *        in="path",
     *       description="ID of the user to update",
     *       required=true,
     *      @OA\Schema(type="integer", example=1)
     *   ),
     *   @OA\RequestBody(
     *       required=true,
     *      @OA\JsonContent(
     *          @OA\Property(property="name", type="string", example="John Doe"),
     *         @OA\Property(property="email", type="string", format="email", example="john.doe@example.com")
     *     )
     *  ),
     *    @OA\Response(
     *        response=200,
     *       description="User updated successfully",
     *      @OA\JsonContent(
     *         @OA\Property(property="message", type="string", example="User updated")
     *    )
     *
     *   ),
     * )
     */
    public function update(): void {}
}
