<?php

use Illuminate\Support\Facades\Route;

/* #Region Get User */
Route::get('/user/search', 'IUserController@GetAllUsers')->name('user-search');
Route::get('/{name}/{surname}/{dob}/{recentPurchase}/{address}', 'IUserController@GetUserView')->name('get-user');
/* #Endregion Get User */

/* #Region Add User */
Route::get('/user/adduser', 'IUserController@GetAddUserForm')->name('add-user-form');
Route::post('/user/adduser', 'IUserController@AddUserStore')->name('add-user');
/* #Endregion Add User */

/* #Region Update User */
Route::get('/user/editUser/{id}', 'IUserController@GetEditUserForm')->name('edit-user-form');
Route::put('/user/editUser','IUserController@EditUser')->name('edit-user');
/* #Endregion Update User */

/* #Region Delete User */
Route::get('/user/deleteUser/{id}','IUserController@DeleteUser')->name('delete-user');
/* #Endregion Delete User */
