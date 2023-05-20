<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomeEmailJob;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail()
    {
        logger('Inside Email Controller');

        dispatch(new SendWelcomeEmailJob());
    }
}
