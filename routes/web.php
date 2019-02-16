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

Route::prefix('panel')->group(function () {
    Route::prefix('usuarios')->group(function () {
        Route::get('/', 'UsersController@index');
        Route::get('create', 'UsersController@create');
        Route::get('edit/{id}', 'UsersController@edit');
    });
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
