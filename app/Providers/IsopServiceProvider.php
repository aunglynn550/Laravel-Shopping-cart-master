<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Isop\Isop;

class IsopServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('isop',function(){
            return new Isop();
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
