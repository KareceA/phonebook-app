<?php

namespace App\Http\Controllers;

use App\Models\PhoneUser;
use App\Notifications\TestNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class TestDataController extends Controller
{
    public function sendTestNotification()
    {
        $user = PhoneUser::first();

        $testData = [
            'body' => 'This is a test Notification feature',
            'testText' => 'You are allowed to test',
            'url' => url('/'),
            'thankYou' => 'You have 14 days left to test'
        ];

//        $user->notify(new TestNotification($testData));
        Notification::send($user, new TestNotification($testData));
    }
}
