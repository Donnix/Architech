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
    return view('home');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/detail', 'DetailController@index')->name('detail');

Route::resource('services', 'ServiceController');
Route::resource('orders','OrderController');
Route::resource('levels','LevelController');

Route::get('/architect', 'ArchitectController@index')->name('architect');
Route::get('/contractor', 'ContractorController@index')->name('contractor');

Route::get('/contact', 'ContactController@index')->name('contact');
Route::post('/contact','ContactController@store')->name('contact');   

Route::get('/about', 'AboutController@index')->name('about');