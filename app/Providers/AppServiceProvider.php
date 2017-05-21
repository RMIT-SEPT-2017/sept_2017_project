<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer(['layouts.navAdmin'], function($view){
            $title = DB::select('select * from business where id = ?', [1])[0];
            $view->with('title', $title);
        });
        View::composer(['layouts.nav'], function($view){
            $title = DB::select('select * from business where id = ?', [1])[0];
            $view->with('title', $title);
        });
    }
}
