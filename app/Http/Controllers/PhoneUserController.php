<?php

namespace App\Http\Controllers;

use App\Actions\UserRegisterAction;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\PhoneUserResource;
use Exception;

class PhoneUserController extends Controller
{
    public function store(UserRegisterAction $action, UserRegisterRequest $request)
    {
        try {
            $response = $action->handle($request);
            // return $response;
            return new PhoneUserResource($response);
            // return response()->json([
            //     'message' => 'User created successfully!',
            //     'data' => $response], 201);
        } catch (Exception $exception) {
            report($exception);
        }
    }
}
