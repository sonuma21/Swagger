<?php

namespace App\Data\Event;

final class EventData
{
    public function __construct(
        public readonly string $name,
        public readonly string $location,
    ) {}
}
