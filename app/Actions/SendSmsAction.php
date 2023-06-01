<?php

namespace App\Actions;

use App\Http\Requests\SmsRequest;
use App\Services\SmsService;
use Exception;

class SendSmsAction
{
    public function handle(SmsRequest $request)
    {
        logger('Inside sms action');

        try {
            return SmsService::send($request);
        } catch (Exception $exception) {
            report($exception);
        }
    }
}
