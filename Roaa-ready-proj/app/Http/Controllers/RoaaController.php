<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoaaController extends Controller
{
   public function welcome(){
    return view('welcome');
   }
   public function pricing(){
    return view('pricing');
}
public function about(){
    return view('about');
}
public function courses(){
       
}
public function join(){
    return view('join');
}

public function teachers(){
       
}
}
