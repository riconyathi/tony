<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LearnerController extends Controller
{
   public function index(){

    $learners = User::get();
    
    
    return view('all_learners',compact('learners'));
   }

   public function store(Request $request){

    //validate incoming 
    $fields = $request->validate([
        'name' => ['required','min:3', 'max:255'],
        'surname' => ['required','min:3', 'max:255'],
        'identinty' => ['required','min:6', 'max:20']
    ]);

    $user = User::create([
        'name' => $fields['name'],
        'surname' => $fields['surname'],
        'identinty' => $fields['identinty']
    ]);

    return redirect()->back();

   }
}
