<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use Illuminate\Http\Request;
use Laravel\Passport\RefreshToken;

class LogoutAction
{
    public function execute(Request $request): void
    {
        $accessTokenId = $request->user()->token()->id;

        $request->user()->token()->revoke();

        RefreshToken::where('access_token_id', $accessTokenId)
            ->update(['revoked' => true]);
    }
}
