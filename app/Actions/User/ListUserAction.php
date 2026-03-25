<?php

declare(strict_types=1);

namespace App\Actions\User;

use App\Models\User;

class ListUserAction
{
    public function execute()
    {
        return User::all();
    }
}
