<?php

namespace App\Http\Controllers;

use App\Actions\UserRegisterAction;
use App\Http\Requests\UserRegisterRequest;

class PhoneUserController extends Controller
{
    public function store(UserRegisterAction $action, UserRegisterRequest $request)
    {
            $action->handle($request);
    }
}
