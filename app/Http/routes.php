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
    return view('home');
});



Route::auth();

Route::get('phonebook/create', 'phone@create');
Route::post('phonebook/store', 'phone@store');
// Route::get('phonebook',[
// 	'middleware'=>'auth',
// 	'uses'=>'info@index'
// ]);
// Route::get('phonebook', function(){
// 	return view('phonebook', compact('user'));
// })->middleware('auth');

Route::get('phonebook', 'phone@index');
Route::get('phonebook/details/{id}', 'phone@details');
Route::get('phonebook/edit/{id}', 'phone@edit');
Route::patch('phonebook/update/{id}', 'phone@update');
Route::get('phonebook/delete/{id}', 'phone@delete');
Route::post('phonebook/delete/{id}', 'phone@deleteConfirmed');


Route::get('voucher/create', 'customerController@create');
Route::post('voucher/store', 'customerController@store');


Route::get('voucher/operations', 'testingController@index');
Route::post('voucher/calc', 'testingController@calc');

Route::get('/test', function(){
	return view('testCORS');
});



