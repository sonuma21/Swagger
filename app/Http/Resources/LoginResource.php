<?php

declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    public static $wrap = null;

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'accessToken' => $this->access_token,
            'name' => $this->name,
            'email' => $this->email,
            'refreshToken' => $this->refresh_token,
            'expireIn' => $this->expire_in,
        ];
    }
}
