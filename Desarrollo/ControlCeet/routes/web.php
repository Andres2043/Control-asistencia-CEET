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

Route::post('Login', 'InicioController@Login')->name('LoginInicio.Login');

Route::get('Registro/Fichas', 'RegistroFichasController@index')->name('RegistroFichas.Index');

Route::get('Asistencia/Aprendices', 'AsistAprendicesController@index')->name('AsistenciaAprendices.Index');

Route::get('Registro/Admin', 'RegistroAdminController@index')->name('RegistroAdmin.Index');

Route::get('Registro/Usuarios', 'RegistroUsuariosController@index')->name('RegistroUsuarios.Index');

Route::get('Listado/Aprendices', 'RegistroUsuariosController@ListadoUpdate')->name('ListadoAprendiz.Listado');

Route::post('Validacion/Ficha', 'RegistroFichasController@Login')->name('FichaLogin.login');

Route::post('Validacion/Administrador', 'RegistroAdminController@Login')->name('RegistroAdmin.Login');

Route::post('Validacion/Usuario', 'RegistroUsuariosController@Login')->name('RegistroUser.Login');

