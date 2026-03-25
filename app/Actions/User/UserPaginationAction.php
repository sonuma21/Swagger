<?php

declare(strict_types=1);

namespace App\Actions\User;

use App\Data\User\PaginationData;
use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;

class UserPaginationAction
{
    public function execute(PaginationData $dto): LengthAwarePaginator
    {
        return User::query()
            ->select([
                'id',
                'name',
                'email',
                'phone',
                'designation',
                'department',
                'status',
            ])

            ->when($dto->search, function ($query) use ($dto): void {
                $query->where(function ($q) use ($dto): void {
                    $q->where('name', 'like', "%{$dto->search}%")
                        ->orWhere('email', 'like', "%{$dto->search}%");
                });
            })

            ->when($dto->status !== null, function ($query) use ($dto): void {
                $query->where('status', $dto->status->value);
            })

            ->orderBy($dto->sort, $dto->order)

            ->orderBy('id', 'asc')

            ->paginate($dto->perPage, page: $dto->page);
    }
}
