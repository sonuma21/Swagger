<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use App\Data\User\StoreUserData;
use App\Enum\UserStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'name' => ['required', 'string', 'max:25'],
            'email' => ['required', 'string', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['nullable', 'string', 'digits:10'],
            'designation' => ['nullable', 'string', 'max:20'],
            'department' => ['nullable', 'string', 'max:20'],
            'status' => ['required', Rule::enum(UserStatus::class)],

        ];
    }

    public function toData(): StoreUserData
    {
        return new StoreUserData(
            name: $this->input('name'),
            email: $this->input('email'),
            password: $this->input('password'),
            phone: $this->input('phone'),
            designation: $this->input('designation'),
            department: $this->input('department'),
            status: UserStatus::from($this->input('status')),
        );
    }
}
