<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EditarController;
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


/* Route::get('/register', [RegisterController::class, 'show']);
Route::post('/action-register', [RegisterController::class, 'register']); */

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
        /**
         * Logout Routes
         */

         /**
     * Home Routes
     */
    Route::get('/home', 'HomeController@index')->name('home.index');

    Route::get('/notlogin', 'HomeController@index')->name('home.index');



    Route::get('/usuarios/{id}/editar', 'EditarController@editar')->name('usuarios.editar');
    
    Route::put('/usuarios/{id}', 'EditarController@update')->name('usuarios.update');


    Route::get('/eliminar/{id}/buscar', 'EliminarController@buscar')->name('usueliminar.editar');
    Route::delete('/eliminar/{id}', 'EliminarController@eliminar')->name('eliminar');

    Route::get('/contexto', 'ContextoController@show')->name('contexto.show');
    Route::post('/contexto', 'ContextoController@guardar')->name('contexto.guardar');

    Route::get('/dofa', 'DofaController@show')->name('dofa.show');
    Route::post('/dofa', 'DofaController@guardar')->name('dofa.guardar');


    Route::get('/tecnico', 'TecnicoController@show')->name('tecnico.show');
    Route::post('/tecnico', 'TecnicoController@guardar')->name('tecnico.guardar');

    Route::post('/riesgos', 'RiesgosController@store')->name('riesgos.store');
    Route::get('/riesgos', 'RiesgosController@index')->name('riesgos.index');


    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

        Route::get('/login', 'LoginController@show')->name('login.show');
        
      
    });

    Route::group(['middleware' => ['auth']], function() {
   
        
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});