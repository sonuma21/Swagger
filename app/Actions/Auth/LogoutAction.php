<?php

declare(strict_types=1);

namespace App\Actions\Auth;

use Illuminate\Http\Request;

class LogoutAction
{
    public function execute(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->json(null, 204);
    }
}
