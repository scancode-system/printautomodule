<?php


Route::prefix('print_auto')->middleware('auth.basic.once')->group(function() {
	
	Route::get('{order}', 'Api\PrintAutoController@print');

});