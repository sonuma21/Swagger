<?php

declare(strict_types=1);

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/auth')->controller(AuthController::class)->group(function (): void {
    Route::post('/login', 'login');
    Route::delete('/logout', 'logout')->middleware('auth:api');
});

Route::prefix('v1/users')->controller(UserController::class)->group(function (): void {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{id}', 'show');
    Route::put('/{id}', 'update');
    Route::patch('/{id}', 'updatePartial');
    Route::delete('/{id}', 'destroy');
});

Route::prefix('v1/events')->controller(EventController::class)->group(function (): void {
    Route::post('/', 'store');
    Route::get('/', 'index');
    Route::get('/{event}', 'show');
    Route::put('/{event}', 'update');
    Route::patch('/{event}', 'update');
    Route::delete('/{event}', 'destroy');
});
