<?php

namespace App\Http\Requests\Event;

use Illuminate\Foundation\Http\FormRequest;

class StoreEvent extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        if ($this->method() === 'PATCH') {
            return [
                'name'     => 'sometimes|required|string|min:1',
                'location' => 'sometimes|required|string|min:1',
            ];
        }
        return [
            'name'     => 'required|string|min:1',     // min:1 blocks "" and "   "
            'location' => 'required|string|min:1',
        ];
    }

}
