<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CheckPhoneNumber;

class CheckParam extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Services\CheckPhoneNumber', function ($app) {
          return new CheckPhoneNumber();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
