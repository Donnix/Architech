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

Route::group(['prefix' => '/'],function(){

Auth::routes();

Route::group(['prefix' => 'home', 'as' => 'home.'], function() {
Route::get('/', 'HomeController@index')->name('index');
});


Route::group(['prefix' => 'datauser', 'as' => 'datauser.'], function() {
Route::get('/', 'UserController@index')->name('index');
Route::get('loadTablePending', 'UserController@loadTablePending')->name('loadTablePending');
Route::get('loadTableApproval', 'UserController@loadTableApproval')->name('loadTableApproval');
Route::get('loadTableReject', 'UserController@loadTableReject')->name('loadTableReject');
});


Route::group(['prefix' => 'select-register', 'as' => 'selectregister.'], function() {
Route::get('/', 'SelectController@index')->name('index');
});


Route::group(['prefix' => 'architect', 'as' => 'architect.'], function() {
Route::get('/', 'ArchitectController@index')->name('index');
				
					Route::get('create', 'ArchitectController@create')->name('add');
					Route::post('save', 'ArchitectController@store')->name('save');
					Route::get('edit/{id}', 'ArchitectController@edit')->name('edit');
					Route::post('update/{id}', 'ArchitectController@update')->name('update');
					Route::get('delete', 'ArchitectController@destroy')->name('delete');

                    });
// Untuk sementara
Route::group(['prefix' => 'detail-architect', 'as' => 'detailarchitect.'], function() {
Route::get('/', 'DetailArchitectController@index')->name('index');
});


Route::group(['prefix' => 'contractor', 'as' => 'contractor.'], function() {
Route::get('/', 'ContractorController@index')->name('index');
});


Route::group(['prefix' => 'about', 'as' => 'about.'], function() {
Route::get('/', 'AboutController@index')->name('index');
});


Route::group(['prefix' => 'contact', 'as' => 'contact.'], function() {
Route::get('/', 'ContactController@index')->name('index');
Route::get('store', 'ContactController@store')->name('store');

});


});

// Route::resource('services', 'ServiceController');

// Route::resource('architect','ArchitectController');
// Route::get('detail-architect','DetailArchitectController@index')->name('detailarchitect');


