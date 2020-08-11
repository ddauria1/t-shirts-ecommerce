<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    public function GetUserView($name) {
        return view('users.user', ['name'=>$name]);
    }
}