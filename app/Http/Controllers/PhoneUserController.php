<?php

namespace App\Http\Controllers;

use App\Models\PhoneUser;
use Illuminate\Http\Request;

class PhoneUserController extends Controller
{
    //
    public function create(Request $request)
    {
        $phone_user = new PhoneUser();

        $phone_user->first_name = $request->input('first_name');
        $phone_user->last_name = $request->input('last_name');
        $phone_user->phone_number = $request->input('phone_number');
        $phone_user->gender = $request->input('gender');

        $phone_user->save();
        return response()->json($phone_user);
    }
}
