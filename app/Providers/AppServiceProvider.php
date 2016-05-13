<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $subcate = new Category;

        $allSubCategories = $subcate -> getCategories();

        view()->share('allSubCategories', $allSubCategories);
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
