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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('generos','GenerosController');
Route::resource('representantes','RepresentanteController');
Route::resource('parametros','ParametroController');
Route::resource('eventos','EventoController');
Route::resource('novedades','NovedadeController');

Route::resource('calendarios','CalendarioController');

Route::resource('users','UserController');
Route::get('/administrador', 'UserController@admin')->name('users.admin');

/*Rutas para separar artistas por genero*/
Route::get('/generos/byName/{genero}', 'GeneroController@byName');

Route::get('/representantes/byName/{genero}', 'RepresentanteController@byName');


Route::get('/paypal/pay', 'PaymentController@payWithPayPal');
/*Route::get('/paypal/status', 'PaymentController@paypalStatus');*/