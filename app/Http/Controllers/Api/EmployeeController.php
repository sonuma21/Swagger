<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Actions\Employee\StoreAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreRequest;
use App\Http\Resources\EmployeeResource;

class EmployeeController extends Controller
{
    public function store(StoreRequest $request, StoreAction $action)
    {
        return EmployeeResource::make(
            $action->execute($request->toDto())
        );
    }
}
