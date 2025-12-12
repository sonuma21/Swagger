<?php

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
    /** @OA\Property(type="integer", example=12) */
    public int $id;

    /** @OA\Property(type="string", example="Udhauli Chasok Parva") */
    public string $name;

    /** @OA\Property(type="string", example="Dharan") */
    public string $location;
}
