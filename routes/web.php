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
Route::get('select-register', 'SelectController@index')->name('selectregister');

Route::get('home', 'HomeController@index')->name('home');
Route::resource('register-professional', 'Auth\RegisterController');
Route::resource('services', 'ServiceController');
Route::group(['prefix' => 'architect', 'as' => 'architect.'], function() {
    Route::get('/', 'ArchitectController@index')->name('index');
    Route::get('create', 'ArchitectController@create')->name('add');
    Route::post('save', 'ArchitectController@store')->name('save');
    Route::get('edit/{id}', 'ArchitectController@edit')->name('edit');
    Route::post('update/{id}', 'ArchitectController@update')->name('update');
    Route::get('delete', 'ArchitectController@destroy')->name('delete');
});
Route::get('detail-architect','DetailArchitectController@index')->name('detailarchitect');

Route::resource('contractor','ContractorController');



Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact','ContactController@store')->name('contact');

Route::get('about', 'AboutController@index')->name('about');


