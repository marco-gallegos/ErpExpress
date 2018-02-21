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

Route::get('/cliente', 'ClienteController@show');
Route::get('cliente/create', 'ClienteController@show');
Route::get('/', function(){
	echo "no hay landing page :(";
});

Route::post('cliente/create', 'ClienteController@create');
