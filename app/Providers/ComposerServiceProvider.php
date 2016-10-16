<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['task.task', 'task.index'],
            'App\Http\ViewComposers\TaskComposer');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
