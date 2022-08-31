<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Promocode;

class PromocodeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->bind('promocodes',function(){ 
        // above will occur >> Target class [promocode] does not exist. << error
        $this->app->bind('promocode',function(){
            return new Promocode();
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
