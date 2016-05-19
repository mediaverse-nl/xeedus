<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested..
|
*/
Route::group(['middleware' => ['web']], function () {

    Route::auth(); 

    Route::get('products', ['as' => 'products', 'uses' => 'OrderController@index']);
    Route::get('video/{video_key}', ['as' => 'video', 'uses' => 'VideoController@show']);
    
    Route::get('/', 'HomeController@index');
    Route::get('contact', ['as' => 'contact', 'uses' => 'pages\ContactController@index']);
    Route::get('credits', ['as' => 'credits', 'uses' => 'pages\CreditsController@index']);
    Route::get('support', function(){return 'support';});
    Route::get('courses', ['as' => 'all_courses', 'uses' => 'CategoryController@index']);
    Route::get('courses/{cate}', ['as' => 'sub_courses', 'uses' => 'CategoryController@show']);

    Route::get('/profile', ['as' => 'profile', 'uses' => 'UserController@index']);
    Route::get('/profile/edit', ['as' => 'profile_edit', 'uses' => 'UserController@edit']);
    Route::patch('/profile', ['as' => 'profile_store', 'uses' => 'UserController@update']);
    Route::resource('/profile', 'UserController');

    //must be loggedin
    Route::group(['middleware' => 'auth'], function () {


        Route::group(array(['middleware' => 'admin'], 'prefix' => 'admin' ), function () {
            //routing for admin use
            Route::get('/', ['as' => 'dashboard', 'uses' => 'Admin\AdminController@index']);
            //routing for admin category use
            Route::get('/categories', ['as' => 'AdminCategory', 'uses' => 'Admin\CategoryAdminController@index']);
            Route::get('/categories/create', ['as' => 'categories', 'uses' => 'Admin\CategoryAdminController@create']);
            Route::patch('/categories', ['as' => 'StoreCategory', 'uses' => 'Admin\CategoryAdminController@store']);
            Route::resource('/categories', 'Admin\CategoryAdminController');
        });


    });

});





