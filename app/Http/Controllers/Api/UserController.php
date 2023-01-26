<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LoginResource;
use App\Http\Resources\RegisterResource;
use App\Services\LoginService;
use App\Services\RegisterService;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function register(RegisterRequest $request, RegisterService $registerService): RegisterResource
    {
        $user = $registerService($request->validated());

        return new RegisterResource($user);
    }


    /**
     * @throws ValidationException
     */
    public function login(LoginRequest $request, LoginService $loginService): LoginResource
    {
        $request->authenticate();
        $user = $loginService($request->validated());

        return new LoginResource($user);
    }
}
