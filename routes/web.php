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
    //TODO ADMINISTRADORES
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/superadmin', 'SuperAdminController@index')->name('superadmin.index');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('usuarios', 'UserController')->only([
        'create', 'store', 'edit','update','index','show'
    ]);
});