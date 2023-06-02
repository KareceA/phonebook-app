<?php

namespace App\Listeners;

use App\Events\SendSmsEvent;
use App\Services\SmsService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendSmsListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SendSmsEvent  $event
     * @return void
     */
    public function handle(SendSmsEvent $event, $phoneUser)
    {
        logger('Inside Sms Listener');

        SmsService::send($phoneUser);
    }
}
