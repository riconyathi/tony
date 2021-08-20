<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Assessor;
use App\Models\Moderator;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;

class UsersController extends Controller{
    public function users(){
        $users = User::where('role','assessor')->orWhere('role', 'moderator')->get();
        
        return view('users',compact('users'));
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

public function create(Request $request){
    // register users
    //validate user fields
    $fields = $request->validate([
        'name' => ['required', 'max:255'],
        'surname' => ['required', 'min:3'],
        'role' => ['required'],
        'identinty' => ['required', 'min:8'],
        'number' => ['required'],
        'password' => ['required','confirmed', 'min:8'],
    ]);

    //insert in users table
    $user = User::create([
        'identinty'=> $fields['identinty'],
        'name'=> $fields['name'],
        'surname'=> $fields['surname'],
        'password' => Hash::make($fields['password']),
        'role'=> $fields['role']
        
    ]);

    //check role
    if($fields['role'] == 'assessor'){

        Assessor::create([
            'user_id'=> $user->id,
            'assessor_number'=> $fields['number']
        ]);

    }else{

        Moderator::create([
            'user_id'=> $user->id,
            'moderator_number'=> $fields['number']
        ]);

    }

}

}
