<?php

namespace App\Providers;

use App\Channels\LogChannel;
use App\Models\PhoneUser;
use App\Observers\PhoneUserObserver;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        PhoneUser::observe(PhoneUserObserver::class);

        Notification::extend('log', function ($app) {
            return new LogChannel();
        });
    }
}
