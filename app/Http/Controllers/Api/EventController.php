<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Actions\Event\StoreEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Event\EventRequest;
use App\Http\Resources\EventResource;
use App\Models\Event;

class EventController extends Controller
{
    public function store(EventRequest $eventRequest, StoreEvent $eventAction)
    {
        return EventResource::make(
            $eventAction->execute($eventRequest->toData())
        );
    }

    public function index()
    {
        $perPage = request()->get('per_page', 10);

        $events = Event::paginate($perPage);

        return response()->json([
            'items' => EventResource::collection($events->items()),

            'pagination' => [
                'total' => $events->total(),
                'per_page' => $events->perPage(),
                'current_page' => $events->currentPage(),
                'last_page' => $events->lastPage(),
                'previous' => $events->previousPageUrl(),
                'next' => $events->nextPageUrl(),
            ],
        ]);
    }

    public function show(int $event)
    {
        $event = Event::find($event);

        if (! $event) {
            return response()->json([
                'message' => 'Event not found',
            ], 404);
        }

        return new EventResource($event);
    }

    public function update(StoreEvent $request, int $event)
    {
        $event = Event::find($event);

        if (! $event) {
            return response()->json([
                'message' => 'Event not found',
            ], 404);
        }

        $event->update;

        return new EventResource($event);
    }

    public function destroy(int $event)
    {
        $event = Event::find($event);

        if (! $event) {
            return response()->json([
                'message' => 'Event not found',
            ], 404);
        }
        $event->delete();

        return response()->noContent();
    }
}
