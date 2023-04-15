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
            $user = new PhoneUser;
            return $user::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'gender' => $request->gender
            ]);
        } catch (Exception $exception) {
            report($exception);
        }
    }
}
