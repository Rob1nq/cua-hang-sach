<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Cart;
use Illuminate\Support\Facades\view;

use Illuminate\Support\Facades\Schema;


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
        $count=Cart::count();
        view()->share('count');
    }
}
