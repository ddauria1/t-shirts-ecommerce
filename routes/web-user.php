<?php

use Illuminate\Support\Facades\Route;

/* #Region Get User */
Route::get('/user/search', 'UserController@GetAllUsers')->name('user-search');
Route::get('/{name}/{surname}/{dob}/{recentPurchase}/{address}', 'UserController@GetUserView')->name('get-user');
/* #Endregion Get User */

/* #Region Add User */
Route::get('/user/adduser', 'UserController@GetAddUserForm')->name('add-user-form');
Route::post('/user/adduser', 'UserController@AddUserStore')->name('add-user');
/* #Endregion Add User */

/* #Region Update User */
Route::get('/user/editUser/{id}', 'UserController@GetEditUserForm')->name('edit-user-form');
Route::put('/user/editUser','UserController@EditUser')->name('edit-user');
/* #Endregion Update User */

/* #Region Delete User */
Route::get('/user/deleteUser/{id}','UserController@DeleteUser')->name('delete-user');
/* #Endregion Delete User */
