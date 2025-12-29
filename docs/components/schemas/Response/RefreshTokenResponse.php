<?php

namespace Docs\Components\Schemas\Response;

/** @OA\Schema(schema="RefreshTokenResponse") */

class RefreshTokenResponse
{
    /** @OA\Property(example="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2xvY2FsaG9zdDo4MDgwL3YxL2F1dGgvbG9naW4iLCJpYXQiOjE2ODgwMjI0MDAsImV4cCI6MTY4ODAyNjAwMCwibmJmIjoxNjg4MDIyNDAwLCJqdGkiOiJlZDI1ZjhiY2JlIn0.DXK3vY5VnXo5b1bF8XQz1kUOeXhQz5jz3F4Z5k6b7c") */
    public string $accessToken;

    /** @OA\Property(example="def50200e46f1c845159eed71a8ab9f36c6e26e14dad97eba0bfa46b9e3152513b2f3b7cf5d4ad862639a3c5af7e6394624097d1aa496312998f66ae5ea90ab7b2aa15d5abf6f19c543d6b7a93861f47f42ce0b76c8bed766eca127ef8c8ea1806b26f1838f26d3bf0fa31eab996d62ff78070098880731f498c1ca93f0163998fa516eb3d712bbc164271b02a13d142f9922ebb0abc26205ecff078f0768f2ea78a205b345019f1c4d8cb1c3fde6798cd5a061171ba8b4506f41ff9c8a5da62aedbaf00") */
    public string $refreshToken;

    /** @OA\Property(example=7200) */
    public int $expireIn;
}
