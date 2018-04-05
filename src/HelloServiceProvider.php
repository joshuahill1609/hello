<?php

namespace jjh\Hello;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       // dd('trying to register');
       $this->app->bind(Hello::class, function() {
            return new Hello();
       });
    }
}
