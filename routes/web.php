<?php


Route::get('/product','productController@index')->name('product');

            //link , controllerName@functionName




 Route::get('/', function () {
      return view('welcome');
 });
