<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Learner;
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

   public function section_one() {
    return view('section_one');
}
public function section_2(){
    return view('section_2');
    
}

public function school_details(){
    return view('school_details');
    
}

public function update(Request $request,$user_id) {

   // dd($request);

    //validate fields
    $fields = $request->validate([
        'citizenship' => ['required','min:3', 'max:255'],
        'marital_status' => ['required','min:3', 'max:255'],
        'residential_address' => ['required','min:6', 'max:20'],
        'work_address' => ['required','min:3', 'max:255'],
        'phone' => ['required','min:3', 'max:255'],
        'home_phone' => ['required','min:3', 'max:255'],
        'email' => ['required','email']

    ]);
    //learner
    
    $learner = Learner::updateOrCreate([ 
        'citizenship' => $fields['citizenship'],
        'marital_status' => $fields['marital_status'],
        'residential_address' => $fields['residential_address'],
        'work_address' => $fields['work_address'],
        'user_id' => $user_id
    ]);
    //update user
    $user = User::find($user_id);
    $user->phone = $fields['phone'];
    $user->home_phone = $fields['home_phone'];
    $user->email = $fields['email'];
    $user->save();

    return  redirect()->back();
}

public function school_details_update(Request $request,$user_id) {
 
 //validate fields
 $fields = $request->validate([
    'last_school' => ['required','min:3', 'max:255'],
    'highest_grade' => ['required'],
    'subject_passed' => ['required'],
    'date_of_birth' =>['required'],

]);
//learner
$user = Learner::where('user_id',$user_id)->first();


$user->last_school_attended = $fields['last_school'];
$user->highest_grade = $fields['highest_grade'];
$user->subjects_passed = $fields['subject_passed'];
$user->date_of_birth = $fields['date_of_birth'];
$user->save();

//return  redirect()->back();
}
}
