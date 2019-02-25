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
})->name('home');;

Route::prefix('panel')->group(function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::prefix('usuarios')->group(function () {
            Route::get('/', 'UsersController@index')->name("usuarios.index");
            Route::get('create', 'UsersController@create')->name("usuarios.create");
            Route::get('edit/{id}', 'UsersController@edit')->name("usuarios.edit");
        });
        Route::prefix('premios')->group(function () {
            Route::get('/', 'PremiosController@index')->name("premios.index");
            Route::get('create', 'PremiosController@create')->name("premios.create");
            Route::get('edit/{id}', 'PremiosController@edit')->name("premios.edit");
            Route::post('store', 'PremiosController@store')->name("premios.store");
            Route::put('update/{id}', 'PremiosController@update')->name("premios.update");
            Route::get('destroy/{id}', 'PremiosController@destroy')->name("premios.destroy");
        });
        Route::prefix('sorteos')->group(function () {
            Route::get('/', 'SorteosController@index')->name("sorteos.index");
            Route::get('create', 'SorteosController@create')->name("sorteos.create");
            Route::get('edit/{id}', 'SorteosController@edit')->name("sorteos.edit");
            Route::post('store', 'SorteosController@store')->name("sorteos.store");
            Route::put('update/{id}', 'SorteosController@update')->name("sorteos.update");
            Route::get('destroy/{id}', 'SorteosController@destroy')->name("sorteos.destroy");
        });
    });
});

Auth::routes();
