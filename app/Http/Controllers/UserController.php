<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function GetAddUserForm()
    {
        return view('users.AddUser', []);
    }

    public function AddUserStore(Request $request)
    {
        $user = $request->all();

        //validation

        //insert database
        $userDAO = new User();
        $userDAO->fill($user);
        $userDAO->save();
        
        $users = User::all();
        return view('users.search', ['users'=>$users,'Ok'=>"User Added"]);
    }
}