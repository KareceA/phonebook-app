<?php

namespace App\Actions;

use App\Models\PhoneUser;
use Exception;

class GetFemalesAction
{
    public function handle()
    {
        try {
            return PhoneUser::where('gender', 'female')->get();
        } catch (Exception $exception) {
            report($exception);
        }
    }
}
