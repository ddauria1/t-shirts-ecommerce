<?php

use App\Http\Controllers\IUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//static IUserController = new UserController();

//-----------------------------------------------------------------------------------------------------------------------\\

Route::get('/', 'HomeController@GetHomeView');

//-----------------------------------------------------------------------------------------------------------------------\\

//Item Controller Routes

//get item
Route::get('/items/{$itemArray}','ItemController@GetItemView');
//http://127.0.0.1:8000/Dilan/Ormisiar/06011997/%C2%A33,00%20Candle/15%20Wickham%20Road

//add item
Route::get('/items/additem/{$item}','ItemController@GetPostItemView');
Route::post('/items/additem/{$item}','ItemController@PostItem');

//edit item

//delete item

//-----------------------------------------------------------------------------------------------------------------------\\

//User Controller Routes

//get user
Route::get('/user/search', 'UserController@Search')->name('user-search');
Route::get('/{name}/{surname}/{dob}/{recentPurchase}/{address}', 'UserController@GetUserView');

//add user
Route::get('/user/adduser', 'UserController@GetAddUserForm');
Route::post('/user/adduser', 'UserController@AddUserStore');

//edit user
Route::get('/user/editUser/{id}', 'UserController@GetEditUserForm');
Route::put('/user/editUser','UserController@EditUser');

//delete user
Route::delete('/user/deleteUser{$id}','UserController@DeleteUser');

//-----------------------------------------------------------------------------------------------------------------------\\
