<?php
use App\Plantilla;
use App\Carta;
use App\Http\Controllers\IndexController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Index */
Route::get('/', function () {
    return view('index');
});


Route::get('crear_plantilla',function(){
	return view('crearplantilla');
});


/* Authentication routes */

//login
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');

//logout
Route::get('logout', 'Auth\AuthController@logout');

/* Registration routes */
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

//listado de plantillas
Route::post('crear','ModeloController@crear');

Route::get('listar_plantillas','ModeloController@mismodelos');

Route::get('plantillas/{id}','ModeloController@armarplantilla');

Route::get('plantillas/{id}/borrar','ModeloController@eliminar');

Route::get('listar_cartas','CartaController@cartas');

Route::get('cartas/{id}','CartaController@armarplantilla');
Route::get('cartas/{id}/borrar','CartaController@eliminar');

Route::get('descargar/{nombrearchivo}','PdfController@descargar');

//crea carta y guarda pdf
Route::post('plantillas/guardar','PdfController@guardar');

Route::post('enviar', 'MailController@enviar');

Route::get('sancion', function(){
	return view('sancion');
});

Route::get('despido', function(){
	return view('despido');
});

Route::get('invitacion', function(){
	return view('invitacion');
});
Route::get('reclamo', function(){
	return view('reclamo');
});
