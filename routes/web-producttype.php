<?php

use Illuminate\Support\Facades\Route;

//ProductType
Route::get('/product/type/All','ProductTypeController@GetAllProductTypes')->name('all-productTypes');
Route::get('/product/type/{id}','ProductTypeController@GetProductType');
Route::get('/product/type/Add/{productType}','ProductTypeController@CreateProductType');
Route::put('/product/type/Edit/','ProductTypeController@UpdateProductType');
Route::delete('/product/type/Delete/{id}','ProductTypeController@DeleteProductType');
