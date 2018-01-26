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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'tarif'] , function(){

		Route::get('' , 'Tarif@index');
		Route::get('add','Tarif@add');
});

Route::group(['prefix' => 'user'] , function(){

		Route::get('' , 'HomeController@user');
		Route::get('add','HomeController@add');
		Route::post('save','HomeController@save');
		Route::get('edit/{id}','HomeController@edit');
		Route::post('update','HomeController@update');
		Route::get('delete/{id}','HomeController@delete');
});