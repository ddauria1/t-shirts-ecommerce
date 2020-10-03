<?php

use Illuminate\Support\Facades\Route;

//get item
Route::get('/items/{$itemArray}','ItemController@GetItemView');
//http://127.0.0.1:8000/Dilan/Ormisiar/06011997/%C2%A33,00%20Candle/15%20Wickham%20Road

//add item
Route::get('/items/additem/{$item}','ItemController@GetPostItemView');
Route::post('/items/additem/{$item}','ItemController@PostItem');