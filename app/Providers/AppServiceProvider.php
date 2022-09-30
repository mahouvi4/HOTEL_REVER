<?php

namespace App\Providers;

use App\Models\categorie;
use App\Models\image_hotel;
use Illuminate\Support\ServiceProvider;
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
        Schema::defaultStringLength(191);

        view()->composer('*',function($view){
            $view->with('categorie',categorie::all());
        });

        view()->composer('*',function($view){
          $view->with('image_hotel',image_hotel::all());
        });
    }
}
