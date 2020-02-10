<?php

namespace App\Providers;
use App\Level;
use Illuminate\Support\ServiceProvider;

class LevelProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.s
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('Level_array', Level::all());
        });
    }
}
