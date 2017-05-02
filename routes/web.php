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

Route::get('/home', 'HomeController@index');

Route::resource('catEscolaridads', 'catEscolaridadController');
Route::resource('personas', 'PersonaController');

Route::resource('catEscolaridads', 'catEscolaridadController');

Route::resource('catReligions', 'CatReligionController');

Route::resource('catEtnias', 'CatEtniaController');

Route::resource('catEdoCivils', 'CatEdoCivilController');

Route::resource('catNacionalidads', 'CatNacionalidadController');

Route::resource('catJuzgadoFeds', 'CatJuzgadoFedController');

Route::resource('mandamientos', 'MandamientoController');

Route::resource('catDelitos', 'CatDelitoController');

Route::resource('catJuzgados', 'CatJuzgadoController');

Route::resource('catTipoMandos', 'CatTipoMandoController');

Route::resource('catEtapas', 'CatEtapaController');


Route::resource('catMedidas', 'CatMedidaController');

Route::resource('catTipoMedidas', 'CatTipoMedidaController');