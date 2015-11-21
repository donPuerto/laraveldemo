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
Route::get('dashboard',function(){
    return "Dashboard";
});


Route::get('logout',function(){
    return "Thank you logging in";
});



/*Route::get('articles/create', 'ArticlesController@create');
Route::get('articles', 'ArticlesController@index');
Route::get('articles/{id}', 'ArticlesController@show');
Route::post('articles','ArticlesController@store');
Route::get('articles/{id}/edit','ArticlesController@edit');*/
Route::resource('articles','ArticlesController');



Route::get('demo', 'DemosController@index' );
Route::get('demopage', 'DemosController@create' );
Route::post('demopage','DemosController@store' );



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');



// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');



// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
