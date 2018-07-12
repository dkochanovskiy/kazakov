<?php

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@index');

Route::get('/stoly-dlya-peskografiki', 'TablesController@index')->name('stoly-dlya-peskografiki');
Route::post('/stoly-dlya-peskografiki', 'TablesController@index');

Route::get('/aksessuary-dlya-peskografiki', 'AccessoriesController@index')->name('aksessuary-dlya-peskografiki');
Route::post('/aksessuary-dlya-peskografiki', 'AccessoriesController@index');

Route::get('/korzina-s-pokupkami', 'BasketController@index')->name('korzina-s-pokupkami');
Route::post('/korzina-s-pokupkami', 'BasketController@index');
