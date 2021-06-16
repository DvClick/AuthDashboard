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

Route::group(['middleware' => 'admin'], function () {
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('/form', 'AllFormController');
    Route::resource('/form1', 'Form1Controller');
    Route::resource('/admin', 'UserController');
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::get('/setting', 'AuthController@setting')->name('setting');
    Route::post('/password', 'AuthController@password')->name('password');
    Route::post('/update', 'AuthController@update')->name('update');
});

Route::get('/login', 'AuthController@index')->name('login');
Route::post('/login/check', 'AuthController@check')->name('login.check');
