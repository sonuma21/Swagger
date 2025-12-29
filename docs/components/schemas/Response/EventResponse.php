<?php

declare(strict_types=1);

namespace Docs\components\schemas\Response;

/** @OA\Schema(schema="EventResponse") */
class EventResponse
{
    /** @OA\Property( ref="#/components/schemas/Event" ) */
    public object $data;
}

/** @OA\Schema(schema="Event") */
class Event
{
    /** @OA\Property(example=12) */
    public int $id;

    /** @OA\Property(example="Udhauli Chasok Parva") */
    public string $name;

    /** @OA\Property(example="Dharan") */
    public string $location;
}
