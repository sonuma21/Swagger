<?php

declare(strict_types=1);

namespace App\Http\Responses;

use App\Enum\HttpStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Pagination\LengthAwarePaginator;

class ApiResponse
{
    public function success(mixed $data = null, HttpStatus $status = HttpStatus::OK): JsonResponse
    {
        return response()->json($data, $status->value);
    }

    public function paginated(LengthAwarePaginator $paginator, string $resourceClass): JsonResponse
    {
        return response()->json([
            'data' => $resourceClass::collection($paginator->items()),
            'meta' => [
                'total' => $paginator->total(),
                'per_page' => $paginator->perPage(),
                'current_page' => $paginator->currentPage(),
                'last_page' => $paginator->lastPage(),
            ],
        ]);
    }

    public function noContent()
    {
        return response()->noContent(HttpStatus::NO_CONTENT->value);
    }
}
