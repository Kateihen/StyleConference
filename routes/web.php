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
Route::get('/signup', 'RegisterController@home');
Route::post('/signup', 'RegisterController@store');

Auth::routes();

Route::get('/admin', 'ManagerController@home');
Route::get('/list', 'ManagerController@list');
