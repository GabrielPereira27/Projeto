<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contactos', function(){
	return view('contactos');
});

Route::get('contactos', 'App\Http\Controllers\UmController@mostrarForm')
	->name('mostrar.Form');

Route::get('contactos', 'App\Http\Controllers\UmController@mostrarForm')
	->name('mostrar.form');

Route::post('contactos', 'App\Http\Controllers\UmController@processarForm')
	->name('processar.form');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/ondeestamos', function (){
	return view('ondeestamos');
});

Route::get('/empresa', function(){
	return view('empresa');
});

Route::get('/noticias', function(){
	return view('noticias');
});

Route::get('/bicicletas', function(){
	return view('bicicletas');
});

Route::get('/downhill', function(){
	return view('downhill');
});

Route::get('/estrada', function(){
	return view('estrada');
});