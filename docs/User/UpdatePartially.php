<?php
namespace Docs\User;
class UpdatePartially
{
    /**
     * @OA\Patch(
     *     path="/v1/users/{id}",
     *     tags={"Users"},
     *     summary="Partially update a user by ID",
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
     *          @OA\Property(property="name", type="string", example="Jane Doe"),
     *         @OA\Property(property="email", type="string", format="email", example="jane.doe@example.com")
     *      )
     *   ),
     *   @OA\Response(
     *       response=200,
     *      description="User partially updated successfully",
     *     @OA\JsonContent(
     *        @OA\Property(property="message", type="string", example="User partially updated")
     *   )
     *  ),
     * )
     */
    public function updatePartial(): void {}
}
