<?php
/**
 * 
 * code by Rico Nyathi
 * nexgen 
 * Date 23/08/2021
 */
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
        // get assessor, moderators and mentors not implemented 
        $users = User::where('role','assessor')->orWhere('role', 'moderator')->paginate(1);
        
        return view('users',compact('users'));
    }

    public function login(){
        return view('login');
    }

    public function authenticate(Request $request)
    {
        
    
    $credentials = $request->only('identinty', 'password');
        if (Auth::attempt($credentials)) {
            
            return redirect()->intended('/home')
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
    // delete user
     

}

}
