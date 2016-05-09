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
    
    Route::get('/', 'HomeController@index');
    Route::get('contact', ['as' => 'contact', 'uses' => 'pages\ContactController@index']);
    Route::get('courses', ['as' => 'courses', 'uses' => 'VideoController@index']);
    Route::get('credits', ['as' => 'credits', 'uses' => 'pages\CreditsController@index']);

    Route::get('support', function(){
        return 'support';
    });

    //must be loggedin
    Route::group(['middleware' => 'auth'], function () {

        Route::get('/profile', ['as' => 'profile', 'uses' => 'ProfileController@index']);
        Route::get('/profile/edit', ['as' => 'profile', 'uses' => 'ProfileController@edit']);
        Route::patch('/profile', ['as' => 'store', 'uses' => 'ProfileController@store']);
        Route::resource('/profile', 'ProfileController');

        //Route::get('/s/{cate}', ['as' => 'upload', 'uses' => 'VideoController@showVideoCate']);


        Route::get('/course/upload', ['as' => 'upload', 'uses' => 'VideoController@create']);
        Route::get('/course/{id}/edit', ['as' => 'edit', 'uses' => 'VideoController@edit']);
        Route::get('/course/{id}', ['as' => 'show', 'uses' => 'VideoController@show']);
        Route::patch('/course', ['as' => 'store', 'uses' => 'VideoController@store']);
        Route::resource('/course', 'VideoController');

        //route::get('/cate', ['as' => 'cate', function () {}]);

        Route::group(['middleware' => 'admin'], function () {

            //routing for admin use

            Route::get('/admin', function () {
                return 'you are an admin';
            });
            Route::get('/admin/products', function () {
                return 'you are an admin and this is product page';
            });
            

        });

    });

});





