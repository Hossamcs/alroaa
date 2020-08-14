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

Route::get('/','RoaaController@welcome');

Route::get('/pricing','RoaaController@pricing');
Route::get('/join','RoaaController@join');
Route::get('/about','RoaaController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




