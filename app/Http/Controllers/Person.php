<?php

namespace App\Http\Controllers;

class Person {
    public $Name;
    public $DoB;
    public $RecentPurchase;
    public $Address;
    public $Surname;

    function __construct($name,$surname, $dob, $recentPurchase, $address) {
        $Name = $name;
        $Surname = $surname;
        $DoB = $dob;
        $RecentPurchase = $recentPurchase;
        $Address = $address;
    }
}
