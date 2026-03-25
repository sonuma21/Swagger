<?php

namespace App\Http\Requests\User;

use App\Data\User\PaginationData;
use App\Enum\UserStatus as UserStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class IndexUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'page'     => ['nullable', 'integer', 'min:1'],
            'per_page' => ['nullable', 'integer', 'min:1', 'max:100'],
            'search'   => ['nullable', 'string', 'max:100'],
            'status'   => ['nullable', Rule::enum(UserStatus::class)],
            'sort_by' => ['nullable', 'string', 'in:name'],
            'order' => ['required', 'string', 'in:asc,desc'],
        ];
    }

    public function toData(): PaginationData
    {
        return new PaginationData(
            page: $this->integer('page', 1),
            perPage: $this->integer('per_page', 10),
            search: $this->input('search', ''),
            status: $this->filled('status') ? UserStatus::from($this->input('status')) : null,
            sort: $this->input('sort_by', 'name'),
            order: $this->input('order', 'asc'),
        );
    }
}
