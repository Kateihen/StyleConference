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

Route::get('/', 'HomeController@index');
Route::get('/speakers', 'HomeController@speakers');
Route::get('/venue', 'HomeController@venue');
Route::get('/schedule', 'HomeController@schedule');
Route::get('/register', 'RegisterController@home');
Route::post('/register', 'RegisterController@store');
