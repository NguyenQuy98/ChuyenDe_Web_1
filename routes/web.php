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
// Route::get('/','HomeController@index')->name('index');
Route::get('/','MainController@main')->name('home');
Route::get('flight-list/','MainController@list')->name('flight-list');
Route::get('flight-detail/{id}','MainController@detail')->name('flight-detail');
Route::get('flight-book/','MainController@book')->name('flight-book');
Route::post('flight-book/','MainController@postbook')->name('flight-book');

Route::get('login/','MainController@login')->name('login');
Route::post('login/','MainController@postLogin')->name('postLogin');
Route::get('register/','MainController@register')->name('register');
Route::post('register/','MainController@register_EX')->name('register_EX');
Route::get('/logout','MainController@logout')->name('logout');
Route::get('/edit','MainController@edit_profile')->name('edit');
Route::post('/edit-profile-post','MainController@edit_profile_post')->name('edit-profile-post');

Route::get('/edit-user','MainController@edit_user')->name('edit-user');
Route::post('/edit-user-post','MainController@edit_user_post')->name('edit-user-post');

Route::get('airway/','MainController@getAirway')->name('airway');

Route::get('airportlist/','AirportController@index')->name('airportlist');
Route::get('airlinelist/','AirlineController@index')->name('airlinelist');


Route::get('/add-domestic-routes','MainController@add_domestic_routes')->name('add-domestic-routes');
Route::post('/add-domestic-routes','MainController@flight_create')->name('add-domestic-routes');
