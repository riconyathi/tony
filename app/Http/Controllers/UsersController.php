<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class UsersController extends Controller{
    public function users(){
        return view('users');
    }

    public function login(){
        return view('login');
    }

    public function authenticate(Request $request)
    {
        
    
    $credentials = $request->only('identinty', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
  
        return redirect('login');
    }


}
