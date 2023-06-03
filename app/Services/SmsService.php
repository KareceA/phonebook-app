<?php

namespace App\Services;

use App\Http\Requests\SmsRequest;
use Exception;
use Illuminate\Support\Facades\Http;

class SmsService
{
    // public static function send(SmsRequest $request)
    public static function send(string $number)
    {
        try {
            logger('SENDING SMS');

            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ])->get(
                'https://sms.arkesel.com/sms/api',
                [
                    // 'action' => 'send-sms',
                    // 'api_key' => env('ARKESEL_API_KEY'),
                    // 'to' => '233' . substr($request->to, 1),
                    // 'from' => $request->from,
                    // 'sms' => $request->sms
                    'action' => 'send-sms',
                    'api_key' => env('ARKESEL_API_KEY'),
                    'to' => '233' . substr($number, 1),
                    'from' => 'PhoneBook',
                    'sms' => 'Welcome to PhoneBook!'
                ]
            );

            return $response->json();
        } catch (Exception $exception) {
            report($exception);
        }
    }
}
