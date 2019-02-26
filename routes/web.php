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
Route::get('/','MainController@main')->name('home');
Route::get('flight-list/','MainController@list')->name('flight-list');
Route::get('flight-detail/','MainController@detail')->name('flight-detail');
Route::get('flight-book/','MainController@book')->name('flight-book');
Route::get('login/','MainController@login')->name('login');
Route::get('register/','MainController@register')->name('register');
