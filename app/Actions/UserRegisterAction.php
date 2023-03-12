<?php

namespace App\Actions;
use App\Http\Requests\UserRegisterRequest;
use App\Models\PhoneUser;
use Exception;

//this action receive a request and create a new user
class UserRegisterAction
{
    public function handle(UserRegisterRequest $request)
    {
        try {
            return PhoneUser::query()->create([$request]);
        } catch (Exception $exception) {
            report($exception);
        }
    }
}
