<?php

namespace App\Providers;

use \Auth;
use View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //позволяет сделать доступной переменную dima  на  всех вьюхах вданном приложении
        View::share('dima', 'DIMA');
        View::composer('*', function ($view){
           $view->with('auth', Auth::user());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
