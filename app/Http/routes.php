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
    //must be loggedin
    Route::group(['middleware' => 'auth'], function () {

        Route::post('/profile', ['as' => 'profile.update', 'uses' => 'UserController@update']);
        Route::get('/profile', ['as' => 'profile', 'uses' => 'UserController@show']);
        Route::get('/profile/edit', ['as' => 'profile_edit', 'uses' => 'UserController@edit']);
        Route::resource('/profile', 'UserController', [
            'except' => ['create', 'store', 'update', 'destroy']
        ]);

        Route::put('/video', ['as' => 'video.update', 'uses' => 'VideoController@update']);
        Route::post('/video', ['as' => 'video.store', 'uses' => 'VideoController@store']);
        Route::get('/video', ['as' => 'video_all', 'uses' => 'VideoController@index']);
        Route::get('/video/create', ['as' => 'video_create', 'uses' => 'VideoController@create']);
        Route::get('/video/{video_key}', ['as' => 'video_show', 'uses' => 'VideoController@show']);
        Route::get('/video/{video_key}/edit', ['as' => 'video_edit', 'uses' => 'VideoController@edit']);
        Route::resource('/video', 'VideoController', [
            'except' => ['create', 'store', 'update']
        ]);

        //Route::get('/products', ['as' => 'video.products', 'uses' => 'VideoController@products']);
        Route::get('products', ['as' => 'products', 'uses' => 'OrderController@index']);


        Route::post('/partner', ['as' => 'partner.store', 'uses' => 'AuthorController@store']);
        Route::get('/partner', ['as' => 'partner', 'uses' => 'AuthorController@index']);
        Route::get('/partner/request', ['as' => 'partner.create', 'uses' => 'AuthorController@create']);
        Route::resource('/partner', 'AuthorController', [
            'except' => ['store', 'update']
        ]);



        Route::get('/', 'HomeController@index');
        Route::get('contact', ['as' => 'contact', 'uses' => 'pages\ContactController@index']);
        Route::get('credits', ['as' => 'credits', 'uses' => 'pages\CreditsController@index']);
        Route::get('support', function(){return 'support';});

        Route::get('courses', ['as' => 'all_courses', 'uses' => 'CategoryController@index']);
        Route::get('courses/{cate}', ['as' => 'sub_courses', 'uses' => 'CategoryController@show']);
    });












});





