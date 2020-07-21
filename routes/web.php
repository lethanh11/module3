<?php

use Illuminate\Support\Facades\Route;

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
// Tạo 1 nhóm route với tiền tố customer
Route::prefix('customer')->group(function () {
    Route::get('index','CustomerController@index');

    Route::get('create','CustomerController@create');

    Route::post('store','CustomerController@store');

    Route::get('{customer}/show','CustomerController@show');

    Route::get('{customer}/edit', 'CustomerController@edit');

    Route::patch('/{customer}','CustomerController@update');

    Route::delete('/{customer}','CustomerController@destroy');
  });
