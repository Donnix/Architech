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

Route::resource('architect','ArchitectController');
Route::get('detail-architect','DetailArchitectController@index')->name('detailarchitect');

Route::resource('contractor','ContractorController');

Route::group(['prefix' => 'datauser', 'as' => 'datauser.'], function() {
Route::get('/', 'UserController@index')->name('index');
Route::get('loadTablePending', 'UserController@loadTablePending')->name('loadTablePending');
Route::get('loadTableApproval', 'UserController@loadTableApproval')->name('loadTableApproval');
Route::get('loadTableReject', 'UserController@loadTableReject')->name('loadTableReject');
});

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact','ContactController@store')->name('contact');

Route::get('about', 'AboutController@index')->name('about');


