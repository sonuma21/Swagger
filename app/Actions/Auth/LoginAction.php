<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class LoginAction
{
    public function execute(LoginRequest $request): JsonResponse
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid email or password',
            ], 401);
        }

        // $user = Auth::user();
        //   echo '<pre>';
        // print_r($user);die;

        $tokenResult = $user->createToken('PersonalAccessToken');

        return response()->json([
            'accessToken' => $tokenResult->accessToken,
            'name' => $user->name,
            'email' => $user->email,
            'expiresIn' => $tokenResult->token->expires_at,

        ], 200);
    }
}
