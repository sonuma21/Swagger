<?php

declare(strict_types=1);

namespace Docs\User;

class PaginateUser
{
    /**
     * @OA\Get(
     *     path="/v1/users",
     *     tags={"Users"},
     *     summary="Get paginated list of users",
     *
     *     @OA\Parameter(
     *         name="page",
     *         in="query",
     *         description="Page number",
     *         required=false,
     *
     *         @OA\Schema(type="integer", example=1)
     *     ),
     *
     *     @OA\Parameter(
     *         name="per_page",
     *         in="query",
     *         description="Number of users per page",
     *         required=false,
     *
     *         @OA\Schema(type="integer", example=10)
     *     ),
     *
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="Search by name, email, designation or department",
     *         required=false,
     *
     *         @OA\Schema(type="string", example="John")
     *     ),
     *
     *      @OA\Parameter(
     *          name="status",
     *          in="query",
     *          description="Filter users by status",
     *          required=false,
     *          @OA\Schema( type="string", enum={"active", "inactive"}, example="active")
     *     ),
     *       @OA\Parameter(
     *            name="sort",
     *            in="query",
     *            description="Field to sort by",
     *            required=false,
     *            @OA\Schema(
     *                type="string",
     *                enum={"name"},
     *                example="name"
     *            )
     *      ),
     *         @OA\Parameter(
     *            name="order",
     *            in="query",
     *            description="Sort direction (ascending or descending)",
     *            required=true,
     *            @OA\Schema(
     *                type="string",
     *                enum={"asc", "desc"},
     *                example="asc"
     *     )
     *    ),
     *     @OA\Response(
     *         response=200,
     *         description="Users retrieved successfully",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(
     *                 property="data",
     *                 type="array",
     *
     *                 @OA\Items(
     *
     *                     @OA\Property(property="id",          type="integer", example=1),
     *                     @OA\Property(property="name",        type="string",  example="John Doe"),
     *                     @OA\Property(property="email",       type="string",  example="john@example.com"),
     *                     @OA\Property(property="phone",       type="string",  example="9876756456"),
     *                     @OA\Property(property="designation", type="string",  example="Software Engineer"),
     *                     @OA\Property(property="department",  type="string",  example="Engineering"),
     *                     @OA\Property(property="status",      type="string",  example="active")
     *                 )
     *             ),
     *
     *             @OA\Property(
     *                 property="meta",
     *                 type="object",
     *
     *                 @OA\Property(property="total",        type="integer", example=6),
     *                 @OA\Property(property="per_page",     type="integer", example=10),
     *                 @OA\Property(property="current_page", type="integer", example=1),
     *                 @OA\Property(property="last_page",    type="integer", example=3),
     *             )
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=401,
     *         description="Unauthorized",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="message", type="string", example="Unauthorized")
     *         )
     *     ),
     *
     *     @OA\Response(
     *         response=403,
     *         description="Forbidden",
     *
     *         @OA\JsonContent(
     *
     *             @OA\Property(property="message", type="string", example="Forbidden")
     *         )
     *     )
     * )
     */
    public function paginateUser(): void {}
}
