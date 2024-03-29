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

Route::get('/upload','IndexController@index')->name('index');


Route::get('import-export', 'TestController@importExport');
Route::post('import', 'TestController@import');
Route::get('export', 'TestController@export');