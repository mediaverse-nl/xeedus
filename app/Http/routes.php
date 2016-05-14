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
        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', ['as' => 'profile', 'uses' => 'ProfileController@index']);
            Route::get('/edit', ['as' => 'profile_edit', 'uses' => 'ProfileController@edit']);
            Route::patch('/', ['as' => 'profile_store', 'uses' => 'ProfileController@store']);
            Route::resource('/', 'ProfileController');
        });
        Route::group(['prefix' => 'c'], function () {
            Route::get('/', ['as' => '', function (){ return 'test';}]);
            Route::get('/{cate}', ['as' => '', function (){ return 'test';}]);

            Route::get('/c/{cate}/', ['as' => 'upload', 'uses' => 'VideoController@showVideoCate']);
            Route::get('/course/uploaded', ['as' => 'uploaded', 'uses' => 'VideoController@showMyVideos']);
            Route::get('/course/upload', ['as' => 'upload', 'uses' => 'VideoController@create']);
            Route::get('/course/{id}/edit', ['as' => 'edit', 'uses' => 'VideoController@edit']);
            Route::get('/course/{id}', ['as' => 'show', 'uses' => 'VideoController@show']);
            Route::patch('/course', ['as' => 'store', 'uses' => 'VideoController@store']);
            Route::resource('/course', 'VideoController');
        });
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





