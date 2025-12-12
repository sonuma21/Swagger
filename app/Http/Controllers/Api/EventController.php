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
    public function index()
    {
        $perPage = request()->get('per_page', 10);

        $events = Event::paginate($perPage);

        return response()->json([
            "items" => EventResource::collection($events->items()),

            "pagination" => [
                "total" => $events->total(),
                "per_page" => $events->perPage(),
                "current_page" => $events->currentPage(),
                "last_page" => $events->lastPage(),
                "previous" => $events->previousPageUrl(),
                "next" => $events->nextPageUrl(),
            ]
        ]);
    }

    public function show($event)
    {
        $event = Event::find($event);

        if (!$event) {
            return response()->json([
                'message' => 'Event not found'
            ], 404);
        }

        return new EventResource($event);
    }
    public function update(StoreEvent $request, $event)
    {
        $event = Event::find($event);

        if (!$event) {
            return response()->json([
                'message' => 'Event not found'
            ], 404);
        }

        $event->update($request->validated());

        return new EventResource($event);
    }

    public function destroy($event)
    {
        $event = Event::find($event);

        if (!$event) {
            return response()->json([
                'message' => 'Event not found'
            ], 404);
        }
        $event->delete();
        return response()->noContent();
    }
}
