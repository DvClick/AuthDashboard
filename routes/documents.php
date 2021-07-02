<?php

use Illuminate\Support\Facades\Route;



Route::get('/AllRequest', 'AllRequest@index')->name('AllRequest.index');

//GET
Route::get('/IMS_01_F02', 'IMS_01_F02@index')->name('IMS_01_F02.index');
Route::get('/IMS_06_F06', 'IMS_06_F06@index')->name('IMS_06_F06.index');
Route::get('/IMS_09_F01', 'IMS_09_F01@index')->name('IMS_09_F01.index');
Route::get('/IMS_24_F01', 'IMS_24_F01@index')->name('IMS_24_F01.index');



//POST
Route::post('/IMS_01_F02/store', 'IMS_01_F02@store')->name('IMS_01_F02.store');
Route::post('/IMS_06_F06/store', 'IMS_06_F06@store')->name('IMS_06_F06.store');
Route::post('/IMS_09_F01/store', 'IMS_09_F01@store')->name('IMS_09_F01.store');
Route::post('/IMS_24_F01/store', 'IMS_24_F01@store')->name('IMS_24_F01.store');


Route::get('/IMS_09_F01/{id}', 'IMS_09_F01@show')->name('IMS_09_F01.show');
Route::post('/IMS_09_F01/check/{id}', 'IMS_09_F01@check')->name('IMS_09_F01.check');
