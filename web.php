<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', function(){
	return "Hello Laravel!";
});

//Transmission Parameters
Route::get('fullname/{name}', function($name){
	echo "Your name is: ".$name;
});

Route::get('Day/{day}', function($day){
	echo "Day: ".$day;
})->where(['day'=>'[0-9]+']);

//Identify 
Route::get('Route1',['as'=>'MyRoute1',function(){
	echo "Hello everyone!";
}]);

Route::get('CallName', function(){
	return redirect()-> route('MyRoute1');
});

Route::get('Route2',function(){
	echo "This is Route2";
})->name('MyRoute2');

Route::get('CallName2', function(){
	return redirect()-> route('MyRoute2');
});

//Route Group
Route::group(['prefix'=>'MyGroup'],function(){
	Route::get('user1', function(){
		return 'This is User1';
	});
	Route::get('user2', function(){
		return 'This is User2';
	});
	Route::get('user3', function(){
		return 'This is User3';
	});
});
