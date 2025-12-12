<?php
namespace Docs\components\schemas\Pagination;
/**
 * @OA\Schema(
 *     schema="EventPaginationLinks",
 *     type="object",
 *     description="Event pagination links"
 * )
 */
class EventPaginationLinks
{
    /** @OA\Property(example=55) */
    private int $total;

    /** @OA\Property(example=8) */
    private int $per_page;

    /** @OA\Property(example=5) */
    private int $current_page;

    /** @OA\Property(example=7) */
    private int $last_page;

    /** @OA\Property(example="http://127.0.0.1:8000/api/v1/events?page=4") */
    private string $previous;

    /** @OA\Property(example="http://127.0.0.1:8000/api/v1/events?page=6") */
    private string $next;


}
