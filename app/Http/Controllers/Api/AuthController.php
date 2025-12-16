<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Actions\Auth\LoginAction;
use App\Actions\Auth\LogoutAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(LoginRequest $request, LoginAction $loginAction): JsonResponse
    {
        return $loginAction->execute($request);
    }

    public function logout(Request $request, LogoutAction $logoutAction): JsonResponse
    {
        return $logoutAction->execute($request);
    }
}
