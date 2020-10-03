<?php

use Illuminate\Support\Facades\Route;

/* #Region Get All Products */
Route::get('/product','ProductController@GetAllProducts');
/* #Endregion Get All Products */

/* #Region Get Product */
Route::get('/product/get/{$productId}','ProductController@GetProduct');
/* #Endregion Get Product */

/* #Region Remove Product */
Route::post('/product/delete/{$productId}','ProductController@RemoveProduct');
/* #Endregion Remove Product */

/* #Region Update Product */
Route::put('/product/update/{$productId}','ProductController@UpdateProduct');
/* #Endregion Update Product */

/* #Region Delete Product */
Route::delete('/product/delete/{$productId}','ProductController@DeleteProduct');
/* #Endregion Delete Product */
