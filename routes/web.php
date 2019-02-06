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

Route::get('/', 'EmployeeController@index')->name('index');
Route::get('/novo', 'EmployeeController@create')->name('create');
Route::post('/store', 'EmployeeController@store')->name('store');
Route::get('/editar/{id}', 'EmployeeController@edit')->name('edit');
Route::post('/update/{id}', 'EmployeeController@update')->name('update');
Route::post('/destroy/{id}', 'EmployeeController@destroy')->name('destroy');
