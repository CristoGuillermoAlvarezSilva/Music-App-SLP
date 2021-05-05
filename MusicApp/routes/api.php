<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::apiresource('generos','GenerosController');
Route::apiresource('representantes','RepresentanteController');
Route::apiresource('parametros','ParametroController');
Route::apiresource('eventos','EventoController');
Route::apiresource('novedades','NovedadeController');
Route::apiresource('users','UserController');
Route::get('/administrador', 'UserController@admin')->name('users.admin');

/*Rutas para separar artistas por genero*/
Route::get('/generos/byName/{genero}', 'GeneroController@byName');

Route::get('/representantes/byName/{genero}', 'RepresentanteController@byName');

Route::get('/tareas', 'TaskController@index');
Route::put('/tareas/actualizar', 'TaskController@update');
Route::post('/tareas/guardar', 'TaskController@store');
Route::delete('/tareas/borrar/{id}', 'TaskController@destroy');
Route::get('/tareas/buscar', 'TaskController@show');
