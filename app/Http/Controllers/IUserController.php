<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface IUserController
{
    function GetUserView($name, $surname, $dob, $recentPurchase, $address);

    function Search();

    function GetAddUserForm();

    function AddUserStore(Request $request);

    function GetEditUserForm($id);

    function EditUser(Request $request);

    function DeleteUser(Request $request);
}
