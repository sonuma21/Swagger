<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use App\Data\User\RefreshData;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class RefreshTokenAction
{
    public function execute(RefreshData $dto): array
    {
        $request = Request::create('/oauth/token', 'POST', [
            'grant_type' => 'refresh_token',
            'refresh_token' => $dto->refreshToken,
            'client_id' => config('passport.password_client_id'),
            'client_secret' => config('passport.password_client_secret'),
            'scope' => '',
        ]);

        $response = app()->handle($request);

        if ($response->getStatusCode() !== 200) {
            throw new UnauthorizedHttpException(
                'Bearer',
                'Invalid or expired refresh token'
            );
        }

        $data = json_decode($response->getContent(), true);

        return $data;
    }
}
