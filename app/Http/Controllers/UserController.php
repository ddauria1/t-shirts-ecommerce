<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller {

    public function GetUserView($name, $surname, $dob, $recentPurchase, $address) 
    {
        $user = new Person($name, $surname, $dob, $recentPurchase, $address);
        return view('users.user', ['user'=>$user]);
    }

    public function Search()
    {
        $users = User::all();
        return view('users.search', ['users'=>$users]);
    }
}