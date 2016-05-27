<?php

namespace Xeedus\Providers;

use Illuminate\Support\ServiceProvider;
use \Xeedus\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       // $subcate = new Category;

      //  $allSubCategories = $subcate -> getCategories();

        //view()->share('allSubCategories', $allSubCategories);

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
