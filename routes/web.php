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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tiposzapatos',' VentanaController@index')->name('tiposzapatos.index');
Route::get('/tiposzapatos/create', 'VentanaController@create')->name('tiposzapatos.create');
Route::post('/tiposzapatos','VentanaController@store')->name('tiposzapatos.store');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
