<?php

declare(strict_types=1);

namespace App\Actions\Employee;

use App\Data\Employee\EmployeeData;
use App\Models\Employee;

final class StoreAction
{
    public function execute(EmployeeData $dto): Employee
    {
        return Employee::create([
            'first_name' => $dto->firstName,
            'last_name' => $dto->lastName,
            'email' => $dto->email,
            'phone_number' => $dto->phone,
            'location' => $dto->location,
        ]);
    }
}
