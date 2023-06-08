<?php

namespace App\Http\Controllers;

use App\Actions\SendSmsAction;
use App\Http\Requests\SmsRequest;
use App\Services\FayaSmsService;
use App\Services\InfoBipService;

class SmsController extends Controller
{
    public function sendSms(SendSmsAction $action, SmsRequest $request)
    {
        logger('Inside sms controller');

        return $action->handle($request);
    }

    public function infoBipSms()
    {
        return InfoBipService::send();
    }


    public function fayaSms()
    {
        logger('Inside Faya Controller');


        return FayaSmsService::send();
    }
}
