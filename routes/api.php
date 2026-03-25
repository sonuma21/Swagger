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

Route::prefix('v1/users')->controller(UserController::class)->group(function (): void {
    Route::get('/list', 'list');
    Route::get('/', 'index');
    Route::get('/favorites', 'listfavUsers');
    Route::post('/', 'store');
    Route::get('/{user}', 'show');
});

Route::prefix('v1/events')->middleware(['auth:api'])->controller(EventController::class)->group(function (): void {
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
