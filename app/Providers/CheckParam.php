<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\CheckPhoneNumber;
use Illuminate\Support\Facades\Validator;

class CheckParam extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*$this->app->bind('App\Services\CheckPhoneNumber', function ($app) {
          return new CheckPhoneNumber();
        });*/
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $message = 'Số điện thoại nhập không chinh xác';
        Validator::extend('phoneRequired', function($attribute, $phone, $parameters, $validator) {
            if (
                9 < strlen($phone)
                AND strlen($phone) < 11
                AND is_numeric($phone)
                AND $phone[0] == 0
                AND $phone[1] != 0 )
            {
                return true;
            }else{
                return false;
            }
        },$message);
    }
}
