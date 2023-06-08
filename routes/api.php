<?php

use App\Http\Controllers\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneUserController;
use App\Http\Controllers\SmsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create', [PhoneUserController::class, 'create']);

Route::get('/show', [PhoneUserController::class, 'show']);

Route::get('/getFemales', [PhoneUserController::class, 'getFemales']);

Route::post('/sendEmail', [MailController::class, 'sendEmail']);

Route::get('/sendSms', [SmsController::class, 'sendSms']);

Route::post('/infoBipSms', [SmsController::class, 'infoBipSms']);

Route::post('/fayaSms', [SmsController::class, 'fayaSms']);
