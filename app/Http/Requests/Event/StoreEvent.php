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
        return [
            'name'     => 'required|string|min:1',     // min:1 blocks "" and "   "
            'location' => 'required|string|min:1',
        ];
    }

}
