<?php

namespace App\Http\Requests\Employee;

use App\Data\Employee\EmployeeData;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone_number' => 'required|string|max:20',
            'location' => 'required|string|max:255',
        ];
    }
     public function toDto(): EmployeeData
    {
        return new EmployeeData(
            firstName: $this->first_name,
            lastName:  $this->last_name,
            email:     $this->email,
            phone:     $this->phone_number,
            location:  $this->location,
        );
    }
}
