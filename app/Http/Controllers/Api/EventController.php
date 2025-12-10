<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Event\StoreEvent;
use App\Http\Resources\EventResource;
use App\Models\Event;

class EventController extends Controller
{
    public function store(StoreEvent $request)
    {
        $event = Event::create($request->validated());

        return new EventResource($event);
    }
}
