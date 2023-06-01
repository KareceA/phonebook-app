<?php

namespace App\Http\Controllers;

use App\Actions\SendSmsAction;
use App\Http\Requests\SmsRequest;

class SmsController extends Controller
{
    public function sendSms(SendSmsAction $action, SmsRequest $request)
    {
        logger('Inside sms controller');

        return $action->handle($request);
    }
}
