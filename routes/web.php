<?php

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@index');

Route::get('/tables', 'TablesController@index')->name('tables');
Route::get('/accessories', 'AccessoriesController@index')->name('accessories');
