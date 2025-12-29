<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;

class ApiResponse
{
    public function success(
        mixed $data = null,
    ): JsonResponse {
        return response()->json([
            'data' => $data,
        ]);
    }

   public function noContent(
        string $message = 'No Content'
    ): JsonResponse {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => null,
        ], 204);
    }

}
