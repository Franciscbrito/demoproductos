<?php


//Vista index de productos

Route::get('/', 'productController@index');
Route::get('/crear', 'productController@create')->name('crear_producto');
Route::post('/guardar', 'productController@store')->name('guardar_producto');
Route::get('/edita/{id}', 'productController@edit')->name('editar_producto');
Route::post('/eliminar/{id}', 'productController@destroy')->name('eliminar_producto');
Route::post('/actualizar/{id}', 'productController@update')->name('actualizar_producto');


