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


Route::group(['prefix' => 'drink'], function () {
    Route::get('/','DrinkController@index')->name('drink.index');
    Route::get('/create','DrinkController@create')->name('drink.create');
    Route::post('/post', 'DrinkController@store')->name('drink.store');
    Route::get('edit/{id}', 'DrinkController@edit')->name('drink.edit');
    Route::post('update', 'DrinkController@update')->name('drink.update');
    Route::post('destroy', 'DrinkController@destroy')->name('drink.destroy');
});
