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

Route::group(array('prefix' => 'food'), function(){
    Route::get('/detail',array('as'=>'detail', 'uses' => 'PublicFoodController@getDetail'));
});

 Route::get('/clawler',function(){

 	function GetImageFromUrl($link){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_POST, 0);
		curl_setopt($ch,CURLOPT_URL,$link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result=curl_exec($ch);
		curl_close($ch);
		return $result;
	}

	$foods = Food::all()->toArray();
	// echo '<pre>';
	// print_r($foods);
	// echo '</pre>';
	$i = 0;
	foreach ($foods as $food) {

		$contents=GetImageFromUrl($food['url_image']);
		$savefile = fopen('public/assets/datastore/images_food/f-'.$food['id'].'.jpg', 'w');
		fwrite($savefile, $contents);
		fclose($savefile);
		$i++;
		echo '<br />Done: '.$i;
	}

	
	echo "Done";


 });