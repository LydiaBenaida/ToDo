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

Auth::routes();

Route::get('/home', 'TaskController@index')->name('home');

Auth::routes();



Route::post('/home/store', 'TaskController@store')->name('home.store');
Route::delete('/home/destroy', 'TaskController@destroy')->name('home.destroy');

