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

Route::get('/user', 'UserRegisterController@index');

Route::post('/user', 'UserRegisterController@register')->name('user.register');

Route::get('/dashboard', 'UserManageController@index')->name('user.show');

Route::get('/user/{id}/edit', 'UserManageController@edit')->name('user.edit');

Route::post('/user/{id}/update', 'UserManageController@update')->name('user.update');

//Route::get('/admin/{id}', function ($id) {
//    return $id;
//});
