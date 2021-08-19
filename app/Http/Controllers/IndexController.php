<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller{
   public function index(){
     
    if(Auth::check()){
        return view('index');
    }

    return redirect("login")->withSuccess('You are not allowed to access');
   }
}
