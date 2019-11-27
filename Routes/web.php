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

Route::prefix('printauto')->group(function() {
    Route::get('{order}', 'PrintAutoController@print')->name('printauto.print');
});


Route::prefix('setting_print_auto')->middleware('auth')->group(function() {
	Route::put('', 'SettingPrintAutoController@update')->name('setting_print_auto.update');
});