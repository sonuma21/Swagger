<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Actions\Auth\LoginAction;
use App\Actions\Auth\LogoutAction;
use App\Actions\Auth\RefreshTokenAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RefreshtokenRequest;
use App\Http\Resources\LoginResource;
use App\Http\Resources\RefreshTokenResource;
use App\Http\Responses\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected ApiResponse $response;

    public function __construct(ApiResponse $response)
    {
        $this->response = $response;
    }

    public function login(LoginRequest $LoginRequest, LoginAction $loginAction)
    {
        $result = $loginAction->execute($LoginRequest->toData());
        return $this->response->success(LoginResource::make($result));
    }

    public function logout(Request $request, LogoutAction $action)
    {
        $action->execute($request);

        return $this->response->noContent();
    }

    public function refreshToken(RefreshtokenRequest $request, RefreshTokenAction $action)
    {
        $result = $action->execute($request->toData());

        return $this->response->success(RefreshTokenResource::make($result));
    }
}
