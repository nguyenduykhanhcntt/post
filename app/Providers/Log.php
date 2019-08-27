<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Sever;

class Log extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Sever::class, function ($app) {
            return new Sever();
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
