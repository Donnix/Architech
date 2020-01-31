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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('services', 'ServiceController');
Route::resource('orders','OrderController');
Route::get('/logins', 'AuthController@index')->name('login');
  Route::post('post-login', 'AuthController@postLogin'); 
  Route::get('registration', 'AuthController@registration');
  Route::post('post-registration', 'AuthController@postRegistration'); 
