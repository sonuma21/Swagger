<?php

namespace App\Http\Requests\Auth;

use App\Data\User\RefreshData;
use Illuminate\Foundation\Http\FormRequest;

class RefreshtokenRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'refresh_token' => 'required|string',
        ];
    }

    public function toData() : RefreshData
    {
        return new RefreshData(
            refreshToken: $this->input('refresh_token'),
        );
    }
}
