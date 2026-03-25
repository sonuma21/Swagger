<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Actions\User\ListFavUsersAction;
use App\Actions\User\ListUserAction;
use App\Actions\User\StoreUserAction;
use App\Actions\User\UserPaginationAction;
use App\Enum\HttpStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\IndexUserRequest;
use App\Http\Requests\User\ListFavUsersRequest;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Http\Responses\ApiResponse;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(protected ApiResponse $response) {}

    public function index(IndexUserRequest $request, UserPaginationAction $action)
    {
        $paginator = $action->execute($request->toData());

        return $this->response->paginated($paginator, UserResource::class);
    }

    public function listfavUsers(ListFavUsersRequest $request, ListFavUsersAction $action)
    {
        $users = $action->execute($request->toData());

        return $this->response->success(UserResource::collection($users));
    }

    public function list(ListUserAction $action)
    {
        $users = $action->execute();

        return $this->response->success(UserResource::collection($users));
    }

    public function store(StoreUserRequest $request, StoreUserAction $action)
    {
        $user = $action->execute($request->toData());

        return $this->response->success(UserResource::make($user), HttpStatus::CREATED);
    }

    public function show(User $user)
    {
        return $this->response->success(UserResource::make($user));
    }
}
