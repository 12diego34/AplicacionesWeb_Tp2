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


/* Authentication routes */

//login
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');

//logout
Route::get('logout', 'Auth\AuthController@logout');


/* Registration routes */

Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
