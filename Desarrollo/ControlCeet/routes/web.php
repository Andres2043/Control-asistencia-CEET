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


Route::get('/', 'LoginController@index')->name('Login.Index');


Route::get('Inicio', 'InicioController@index')->name('Inicio.Index');

Route::post('Login', 'InicioController@create')->name('LoginInicio.Index');

Route::get('Registro/Fichas', 'RegistroFichasController@index')->name('RegistroFichas.Index');

Route::get('Asistencia/Aprendices', 'AsistAprendicesController@index')->name('AsistenciaAprendices.Index');