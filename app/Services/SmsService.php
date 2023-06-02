<?php

namespace App\Services;

use App\Http\Requests\SmsRequest;
use Exception;
use Illuminate\Support\Facades\Http;

class SmsService
{
    public static function send(SmsRequest $request)
    {
        try {
            logger('SENDING SMS');

            $response = Http::get(
                'https://sms.arkesel.com/sms/api',
                [
                    'action' => 'send-sms',
                    'api_key' => env('ARKESEL_API_KEY'),
                    'to' => '233' . substr($request->to, 1),
                    'from' => $request->from,
                    'sms' => $request->sms
                ]
            );

            return $response->json();
        } catch (Exception $exception) {
            report($exception);
        }
    }
}
