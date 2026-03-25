<?php

declare(strict_types=1);

namespace App\Actions\Event;

use App\Data\Event\EventData;
use App\Models\Event;

class StoreEvent
{
    public function execute(EventData $dto): Event
    {
        return Event::create([
            'name' => $dto->name,
            'location' => $dto->location,
        ]);
    }
}
