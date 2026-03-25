<?php

namespace App\Actions\User;

use App\Models\User;

class ListUserAction
{
    public function execute()
    {
        return User::all();
    }
}
