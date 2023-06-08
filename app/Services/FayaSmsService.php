<?php


namespace App\Services;


use http\Client;
use Illuminate\Support\Facades\Http;


class FayaSmsService
{
    public static function send()
    {
        logger('Inside Faya Service');


        $response = Http::withHeaders([
            'fayasms-developer' => '66807884' . 'kG4N7PFdFe8Uu5LBpc7xwB7Y2u4tHCq1',
        ])->post(
            'https://devapi.fayasms.com/messages',
            [
                'sender' => 'Fayaaa',
                'message' => 'Test using FayaSms Integration',
                'recipients' => ['233200327946']
            ],
        );


        logger($response);
        return $response->json();
    }
}
