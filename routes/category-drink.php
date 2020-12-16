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


Route::group(['prefix' => 'category-drink'], function () {
    Route::get('/','CategoryDrinkController@index')->name('category-drink.index');
    Route::get('/create','CategoryDrinkController@create')->name('category-drink.create');
    Route::post('/post', 'CategoryDrinkController@store')->name('category-drink.store');
    Route::get('edit/{id}', 'CategoryDrinkController@edit')->name('category-drink.edit');
    Route::post('update', 'CategoryDrinkController@update')->name('category-drink.update');
    Route::post('destroy', 'CategoryDrinkController@destroy')->name('category-drink.destroy');
});
