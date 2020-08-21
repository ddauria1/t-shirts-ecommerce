<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/{name}/{Bello}', 'UserController@GetUserView');

Route::get('/{name}/{surname}/{dob}/{recentPurchase}/{address}', 'UserController@GetUserView');
//http://127.0.0.1:8000/Dilan/Ormisiar/06011997/%C2%A33,00%20Candle/15%20Wickham%20Road

$testArray = [1,2,3,4,5];
Route::get('/items/','ItemController@GetItemView($testArray)');
