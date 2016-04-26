<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('contact', ['as' => 'contact', function(){
    return view('welcome');
}]);


Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/profile', function(){
    return view('pages.profile');
});


Route::get('/profile/edit', function(){
    return view('auth.profile.edit');
});


Route::post('/profile/edit/', function(Request $request){
    $validator = validator::make($request->all(), [

    ]);

    if ($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $profile = new Profile;

    $profile->name = $request->name;
    $profile->save();

    return redirect('/profile');

});
