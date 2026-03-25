<?php

declare(strict_types=1);

namespace App\Http\Requests\User;

use App\Data\User\FavUsersData;
use Illuminate\Foundation\Http\FormRequest;

class ListFavUsersRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'ids' => 'required|string',
        ];
    }

    public function toData(): FavUsersData
    {
        return new FavUsersData(
            ids: explode(',', $this->query('ids', '')),
        );
    }
}
