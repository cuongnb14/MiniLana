<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', array('as' => 'home', 'uses' => 'PublicHomeController@getIndex'));

Route::get('/public/slide',array('as' => 'slide', function(){
    return View::make("layout.public.slide");
}));

Route::group(array('prefix' => 'public'), function(){
    Route::controller('home','PublicHomeController');
});
