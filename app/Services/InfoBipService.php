<?php

namespace App\Services;

use http\Client;
use Illuminate\Support\Facades\Http;

class InfoBipService
{

    public static function send()
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'App ac04207d727e7c15abf699cb6b246d3e-ab7d47e9-0731-41c3-a1a9-0d910bc03d89',
        ])->post(
            'https://4myv91.api.infobip.com/sms/2/text/advanced',
            [
                    'messages' => [
                        [
                            'from' => 'InfoSMS',
                            'destinations' => [
                                ['to' => "233542398444"]
                            ],
                            'text' => 'This is a message from InfoBip Sms Service',
                        ]
                    ]
            ],
        );

        return $response->json();
    }
}
