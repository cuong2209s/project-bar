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


Route::group(['prefix' => 'staff'], function () {
    Route::get('/','StaffController@index')->name('staff.index');
    Route::get('/create','StaffController@create')->name('staff.create');
    Route::post('/post-staff', 'StaffController@store')->name('staff.store');
    Route::get('edit/{id}', 'StaffController@edit')->name('staff.edit');
    Route::post('update', 'StaffController@update')->name('staff.update');
    Route::post('destroy', 'StaffController@destroy')->name('staff.destroy');
});
