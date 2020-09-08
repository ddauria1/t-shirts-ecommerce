<?php

namespace App\Http\Controllers;

class ItemController extends Controller 
{
    public function GetItemView($items) 
    {
        return view('items',['items'=>$items]);
    }
}