<?php

namespace App\Actions\User;

use App\Data\User\StoreUserData;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreUserAction
{
    public function execute(StoreUserData $data) : User
    {
        return User::create([
            'name' => $data->name,
            'email' => $data->email,
            'password' => Hash::make($data->password),
            'phone' => $data->phone,
            'designation' => $data->designation,
            'department' => $data->department,
            'status' => $data->status,
        ]);
    }
}
