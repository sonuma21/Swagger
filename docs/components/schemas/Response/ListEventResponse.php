<?php

declare(strict_types=1);

namespace Docs\components\schemas\Response;

/**
 * @OA\Schema(
 *     schema="ListEventResponse",
 *     type="object",
 *     description="Paginated list of events"
 * )
 */
class ListEventResponse
{
    /** @OA\Property( @OA\Items(ref="#/components/schemas/Event")) */
    public array $items;

    /** @OA\Property(ref="#/components/schemas/EventPaginationLinks") */
    private object $pagination;
}
