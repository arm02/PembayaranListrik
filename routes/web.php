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
Auth::routes();

Route::get('/','HomeController@welcome');


Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'tarif'] , function(){

	Route::get('' , 'Tarif@index');
	Route::get('add','Tarif@add');
	Route::post('save','Tarif@save');
	Route::get('/{id}/edit','Tarif@edit');
	Route::post('update','Tarif@update');
	Route::get('delete/{id}','Tarif@delete');
});

Route::group(['prefix' => 'user'] , function(){

	Route::get('' , 'HomeController@user');
	Route::get('add','HomeController@add');
	Route::post('save','HomeController@save');
	Route::get('edit/{id}','HomeController@edit');
	Route::post('update','HomeController@update');
	Route::get('delete/{id}','HomeController@delete');
});

Route::group(['prefix' => 'pembayaran'] , function(){
	Route::get('' , 'Pembayaran@index');
	Route::get('add','Pembayaran@add');
	Route::post('save','Pembayaran@save');
});