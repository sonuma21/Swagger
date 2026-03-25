<?php

declare(strict_types=1);

namespace App\Actions\User;

use App\Data\User\FavUsersData;
use App\Models\User;
use Illuminate\Support\Collection;

class ListFavUsersAction
{
    public function execute(FavUsersData $data): Collection
    {
        return User::whereIn('id', $data->ids)->get();
    }
}
