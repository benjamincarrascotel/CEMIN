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

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/superadmin', 'SuperAdminController@index')->middleware(['superadmin'])->name('superadmin.index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::group(['middleware' => ['superadmin']], function () {

        //ALERTA
        Route::post('/contrato/enviar_alerta', 'ContratoController@enviar_alerta')->name('contrato.enviar_alerta');

        //DASHBOARD
        Route::get('/contrato/detalles', 'ContratoController@detalles')->name('contrato.detalles');
        Route::get('/contrato/plan', 'ContratoController@plan')->name('contrato.plan');
        Route::get('/contrato/fechas', 'ContratoController@fechas')->name('contrato.fechas');
        Route::get('/contrato/cronograma', 'ContratoController@cronograma')->name('contrato.cronograma');
        Route::get('/contrato/kpis', 'ContratoController@kpis')->name('contrato.kpis');

        //FASES CONTRATO
        Route::get('/contrato/create_fase_proyectada', 'ContratoController@create_fase_proyectada')->name('fase.create_fase_proyectada');
        Route::post('/contrato/store_fase_proyectada', 'ContratoController@store_fase_proyectada')->name('fase.store_fase_proyectada');
        
        //CONTRATO
        Route::get('/contrato/create', 'ContratoController@create')->name('contrato.create');
        Route::post('/contrato/store', 'ContratoController@store')->name('contrato.store');
        Route::get('/contrato/{id}', 'ContratoController@show')->name('contrato.show');

        Route::post('/contrato/{id}/fase/update', 'ContratoController@fase_update')->name('fase.update');
        Route::post('/contrato/excel', 'ContratoController@excel')->name('contrato.excel');



        
    });
    
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('usuarios', 'UserController')->only([
        'create', 'store', 'edit','update','index','show'
    ]);
});