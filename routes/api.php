<?php

use App\Http\Controllers\Api\EventController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1/users')->controller(UserController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'store');
    Route::get('/{id}', 'show');
    Route::put('/{id}', 'update');
    Route::patch('/{id}', 'updatePartial');
    Route::delete('/{id}', 'destroy');
});

Route::prefix('v1/events')->controller(EventController::class)->group(function () {
    Route::post('/', 'store');
    Route::get('/', 'index');
    Route::get('/{event}', 'show');
    Route::put('/{event}', 'update');
    Route::patch('/{event}', 'update');
    Route::delete('/{event}', 'destroy');
});
