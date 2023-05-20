<?php

namespace App\Observers;

use App\Mail\WelcomeEmail;
use App\Models\PhoneUser;
use Illuminate\Support\Facades\Mail;

class PhoneUserObserver
{
    /**
     * Handle the PhoneUser "created" event.
     *
     * @param  \App\Models\PhoneUser  $phoneUser
     * @return void
     */
    public function created(PhoneUser $phoneUser)
    {
        Mail::to($phoneUser->email)->send(new WelcomeEmail());
    }

    /**
     * Handle the PhoneUser "updated" event.
     *
     * @param  \App\Models\PhoneUser  $phoneUser
     * @return void
     */
    public function updated(PhoneUser $phoneUser)
    {
        //
    }

    /**
     * Handle the PhoneUser "deleted" event.
     *
     * @param  \App\Models\PhoneUser  $phoneUser
     * @return void
     */
    public function deleted(PhoneUser $phoneUser)
    {
        //
    }

    /**
     * Handle the PhoneUser "restored" event.
     *
     * @param  \App\Models\PhoneUser  $phoneUser
     * @return void
     */
    public function restored(PhoneUser $phoneUser)
    {
        //
    }

    /**
     * Handle the PhoneUser "force deleted" event.
     *
     * @param  \App\Models\PhoneUser  $phoneUser
     * @return void
     */
    public function forceDeleted(PhoneUser $phoneUser)
    {
        //
    }
}
