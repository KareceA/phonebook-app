<?php

namespace App\Http\Controllers;

use App\Actions\GetFemalesAction;
use App\Actions\UserRegisterAction;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Resources\PhoneUserResource;
use App\Http\Resources\ShowUsersResource;
use App\Models\PhoneUser;
use Exception;

class PhoneUserController extends Controller
{
    public function create(UserRegisterAction $action, UserRegisterRequest $request)
    {
        try {
            $response = $action->handle($request);
            return new PhoneUserResource($response);
            // return response()->json([
            //     'message' => 'User created successfully!',
            //     'data' => $response], 201);
        } catch (Exception $exception) {
            report($exception);
        }
    }

    public function show()
    {
        $users = PhoneUser::all();
        return ShowUsersResource::collection($users);
    }

    public function getFemales(GetFemalesAction $action)
    {
        $response = $action->handle();
        return response()->json([
            'message' => 'List of all female users.',
            'data' => $response
        ], 200);
    }
}
