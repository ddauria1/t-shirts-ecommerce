<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    public function GetUserView($name, $surname, $dob, $recentPurchase, $address) 
    {
        //$User = new Person($name, $surname, $dob, $recentPurchase, $address);
        return view('users.user', ['name'=>$name,'surname'=>$surname,'dob'=>$dob,'recentPurchase'=>$recentPurchase,'address'=>$address]);
    }
}