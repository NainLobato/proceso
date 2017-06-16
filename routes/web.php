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

Route::resource('catTipoAmparos', 'CatTipoAmparoController');

Route::resource('catResolucionAmparos', 'CatResolucionAmparoController');

Route::resource('catAudiencias', 'CatAudienciaController');

Route::resource('catResolucionInvestigacions', 'CatResolucionInvestigacionController');

Route::resource('catSentencias', 'CatSentenciaController');

Route::resource('catMedidaCautelars', 'CatMedidaCautelarController');

Route::resource('catMedidaProteccions', 'CatMedidaProteccionController');

Route::resource('catJuezs', 'CatJuezController');

Route::resource('catFiscals', 'CatFiscalController');

Route::resource('catFiscals', 'CatFiscalController');

Route::resource('audiencias', 'AudienciaController');

Route::resource('unidads', 'UnidadController');

Route::resource('imputados', 'ImputadoController');

Route::resource('catTipoLugars', 'CatTipoLugarController');

Route::resource('direccions', 'DireccionController');

Route::resource('procesos', 'ProcesoController');

Route::resource('victimas', 'VictimaController');

Route::post('procesos/saveProceso', ['middleware' => 'web','as'=>'procesos.saveProceso','uses'=>'ProcesoController@saveProceso']);

Route::post('procesos/saveVictima', ['middleware' => 'web','as'=>'procesos.saveVictima','uses'=>'ProcesoController@saveVictima']);

Route::post('procesos/saveImputado', ['middleware' => 'web','as'=>'procesos.saveImputado','uses'=>'ProcesoController@saveImputado']);

Route::post('procesos/saveImputacion', ['middleware' => 'web','as'=>'procesos.saveImputacion','uses'=>'ProcesoController@saveImputacion']);

Route::post('procesos/getImplicados', ['middleware' => 'web','as'=>'procesos.getImplicados','uses'=>'ProcesoController@getImplicados']);

Route::post('procesos/deleteVictima', ['middleware' => 'web','as'=>'procesos.deleteVictima','uses'=>'ProcesoController@deleteVictima']);

Route::post('procesos/deleteImputado', ['middleware' => 'web','as'=>'procesos.deleteImputado','uses'=>'ProcesoController@deleteImputado']);

Route::post('procesos/deleteImputacion', ['middleware' => 'web','as'=>'procesos.deleteImputacion','uses'=>'ProcesoController@deleteImputacion']);

Route::resource('avances', 'AvanceController');