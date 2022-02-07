<?php
namespace Naztech\BdMobile;

use Illuminate\Support\ServiceProvider;
use Naztech\BdMobile\BdMobile;

class BdMobileServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton(BdMobile::class);

        $this->app->alias(BdMobile::class, 'bd-mobile');
    }


    public function boot()
    {

    }
}
