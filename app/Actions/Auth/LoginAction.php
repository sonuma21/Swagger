<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use App\Data\User\LoginData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Exceptions\AuthenticationException;

class LoginAction
{
    public function execute(LoginData $dto): User
    {
        $user = User::where('email', $dto->email)->first();
        if (! $user || ! Hash::check($dto->password, $user->password)) {
            throw new AuthenticationException('The provided credentials are incorrect.');
        }
        $tokens = $this->generateTokens($dto);
        $user->setAttribute('access_token', $tokens['access_token']);
        $user->setAttribute('refresh_token', $tokens['refresh_token']);
        $user->setAttribute('expire_in', $tokens['expires_in']);

        return $user;
    }

    private function generateTokens(LoginData $dto)
    {
        $request = Request::create('/oauth/token', 'POST', [
            'grant_type' => 'password',
            'client_id' => config('passport.password_client_id'),
            'client_secret' => config('passport.password_client_secret'),
            'username' => $dto->email,
            'password' => $dto->password,
            'scope' => '*',
        ]);

        $response = app()->handle($request);
        $data = json_decode($response->getContent(), true);

        return $data;
    }
}
