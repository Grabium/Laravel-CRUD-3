<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePage_Contr extends Controller
{
    public function loadPageHome(){
        return view("/home/home");
    }
}