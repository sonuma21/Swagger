<?php

namespace Docs;

class Info
{
    /**
     * @OA\Info(
     *     title="Swaggerr API",
     *     version="1.0.0",
     *     description="Laravel API documentation for Internship project"
     * )
     *
     * @OA\Server(
     *     url="/api",
     *     description="API server (Sanctum)"
     * )
     *
     * @OA\Server(
     *     url="https://production.example.com/api",
     *     description="Production server"
     * )
     */
    public function info(): void
    {
        //
    }
}
