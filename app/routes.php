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

Route::get('/hello',function(){
    echo "hello";
});

Route::group(array('prefix' => 'admin'), function()
{
    Route::controller('home','PublicHomeController');
    
    Route::get('hello',function(){
        echo "hello";
    });
   

});
