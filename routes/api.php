<?php

declare(strict_types=1);

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/auth')->controller(AuthController::class)->group(function (): void {
    Route::post('/login', 'login');
    Route::delete('/logout', 'logout')->middleware('auth:api');
    Route::post('/token/refresh', 'refreshToken');
});

Route::prefix('v1/users')
    ->middleware(['auth:api'])
    ->controller(UserController::class)
    ->group(function (): void {
        Route::get('/', 'index')
            ->middleware('permission:view-users');
        Route::post('/', 'store')
            ->middleware('permission:create-user');
        Route::get('/{id}', 'show')
            ->middleware('permission:view-user');
        Route::put('/{id}', 'update')
            ->middleware('permission:update-user');
        Route::patch('/{id}', 'updatePartial')
            ->middleware('permission:update-user');
        Route::delete('/{id}', 'destroy')
            ->middleware('permission:delete-user');
    });

Route::prefix('v1/events')
    ->middleware(['auth:api'])
    ->controller(EventController::class)
    ->group(function (): void {
        Route::post('/', 'store')
            ->middleware('permission:create-event');
        Route::get('/', 'index')
            ->middleware('permission:view-events');
        Route::get('/{event}', 'show')
            ->middleware('permission:view-event');
        Route::put('/{event}', 'update')
            ->middleware('permission:update-event');
        Route::patch('/{event}', 'update')
            ->middleware('permission:update-event');
        Route::delete('/{event}', 'destroy')
            ->middleware('permission:delete-event');
    });

Route::post('/employees', [EmployeeController::class, 'store']);
