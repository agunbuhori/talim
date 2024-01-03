<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Public\UserRegisterRequest;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    public function register(UserRegisterRequest $userRegisterRequest)
    {
        $userRegisterRequest->register();

        return $this->setMessage("Registration success")
            ->deliver();
    }
}
