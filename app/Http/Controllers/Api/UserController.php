<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * @OA\Info(
     *     title="My Internship API",
     *     version="1.0.0",
     *     description="API documentation for internship project"
     * )
     *
     * @OA\Server(
     *     url="/api",
     *     description="API Base URL"
     * )
     *  @OA\Get(
     *     path="/users",
     *     summary="List all users",
     *     tags={"Users"},
     *     @OA\Response(
     *         response=200,
     *         description="Success"
     *     )
     * )
     * @OA\Post(
     *     path="/users",
     *     summary="Create User",
     *     tags={"Users"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name","email","password"},
     *             @OA\Property(property="name", type="string", example="Ram"),
     *             @OA\Property(property="email", type="string", format="email", example="ram@example.com"),
     *             @OA\Property(property="password", type="string", format="password", example="password123")
     *         )
     *     ),
     *     @OA\Response(response=201, description="User created successfully"),
     *     @OA\Response(response=422, description="Validation error")
     * )
     */
    public function index()
    {

        $users = User::all();

        return response()->json([
            [
                'success' => true,
                'message' => 'User fetched successfully',
                'user' => $users
            ],
            200
        ]);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return response()
            ->json(
                [
                    'success' => true,
                    'message' => 'User created successfully',
                    'user' => $user
                ],
                200
            );
    }
}
