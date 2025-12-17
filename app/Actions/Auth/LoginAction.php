<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginAction
{
    public function execute(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $request = Request::create('/oauth/token', 'POST', [
            'grant_type' => 'password',
            'client_id' => config('passport.password_client_id'),
            'client_secret' => config('passport.password_client_secret'),
            'username' => $user->email,
            'password' => $request->password,
            'scope' => '*',
        ]);

        $response = app()->handle($request);
        $data = json_decode($response->getContent(), true);

        return response()->json([
            'accessToken' => $data['access_token'],
            'name' => $user->name,
            'email' => $user->email,
            'refreshToken' => $data['refresh_token'],
            'expiresIn' => $data['expires_in'],
        ]);
    }
}
