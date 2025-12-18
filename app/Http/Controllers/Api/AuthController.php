<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Actions\Auth\LoginAction;
use App\Actions\Auth\LogoutAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Resources\LoginResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $loginRequest, LoginAction $loginAction)
    {
        return LoginResource::make(
            $loginAction->execute($loginRequest->toData())
        );
    }

    public function logout(Request $request, LogoutAction $logoutAction): JsonResponse
    {
        return $logoutAction->execute($request);
    }
}
