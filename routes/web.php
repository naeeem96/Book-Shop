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


Route::get('/search', 'BookController@search')->name('search');


Route::get('/', 'BookController@index')->name('index');
Route::get('/create', 'BookController@create')->name('create');
Route::get('/edit/{id}', 'BookController@edit')->name('edit');

Route::post('/store', 'BookController@store')->name('store');
Route::post('/update/{id}', 'BookController@update')->name('update');
Route::post('/delete/{id}', 'BookController@delete')->name('delete');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/details', 'HomeController@details')->name('details');


Route::get('/cusview', 'CustomerController@cusview')->name('cusview');
Route::get('/cuscreate', 'CustomerController@cuscreate')->name('cuscreate');
Route::get('/cusedit/{id}', 'CustomerController@cusedit')->name('cusedit');

Route::post('/cusstore', 'CustomerController@cusstore')->name('cusstore');
Route::post('/cusupdate/{id}', 'CustomerController@cusupdate')->name('cusupdate');
Route::post('/cusdelete/{id}', 'CustomerController@cusdelete')->name('cusdelete');
