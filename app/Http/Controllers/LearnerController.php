<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Learner;
use App\Models\Tertiary;
use App\Models\Classes;
use App\Models\Employment;
use Illuminate\Http\Request;
use Hash;

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
            'identinty' => ['required','min:6', 'max:20'],
            'school_id' => ['required']
        ]);
        
        $user = User::create([
            'name' => $fields['name'],
            'surname' => $fields['surname'],
            'identinty' => $fields['identinty'],
            'password' => Hash::make('123456789'),
            'role'=> 'learner'
        ]);
        
        Learner::create([
            'user_id'=> $user->id,
            'school_id'=> $fields['school_id'] 
        ]);
        
        return redirect()->back();
        
    }
    
    public function section_one(){
        $user = User::with('learners')->where('id',auth()->user()->id)->first();
        
        return view('section_one',compact('user'));
    }
    
    
    public function tertiary_details(){
        $datas = Tertiary::where('user_id',auth()->user()->id)->get();
        
        return view('tertiary_details',compact('datas'));
        
    }

    public function employment(){
        $datas = Employment::where('user_id',auth()->user()->id)->get();
        return view('employment',compact('datas'));
       
    }
    
    public function school_details(){
        $user = Learner::where('user_id',auth()->user()->id)->first();
        return view('learner_school_details',compact('user'));
        
    }
    
    public function update(Request $request,$user_id) {
        
        //dd($request);
        
        //validate fields
        $fields = $request->validate([
            'race' => ['required'],
            'citizenship' => ['required','min:3', 'max:255'],
            'marital_status' => ['required','min:3', 'max:255'],
            'residential_address' => ['required','min:6', 'max:20'],
            'work_address' => ['required','min:3', 'max:255'],
            'phone' => ['required','min:3', 'max:255'],
            'home_phone' => ['required','min:3', 'max:255'],
            'email' => ['required','email']
            
        ]);
        //learner
        
        $learner = Learner::where('user_id',$user_id)
        ->update([ 
            'race' => $fields['race'],
            'citizenship' => $fields['citizenship'],
            'marital_status' => $fields['marital_status'],
            'residential_address' => $fields['residential_address'],
            'work_address' => $fields['work_address']
            
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
        
        return  redirect()->back();
    }

    public function update_tertiary_details(Request $request, $id){

        
        $fields = $request->validate([
            'institution' => ['required'],
            'course' => ['required'], 
            'duration' => ['required'], 
            'modules' => ['required'], 
            'year_obtained' => ['required']
        ]);

        if($request->file('document')){
            $file = $request->file('document');
            $document = time().'_'.$request->file('document')->getClientOriginalName();
            $file->storeAs('document', $document, 'public');
           }

        Tertiary::create([
            'user_id' => $id,
            'institution' => $fields['institution'],
            'course' => $fields['course'],
            'duration' => $fields['duration'],
            'modules' => $fields['modules'],
            'year_obtained' => $fields['year_obtained'],
            'document' => $document
        ]);


        
        return  redirect()->back();
        
    }

    public function update_employment_history(Request $request, $id){

        
        $fields = $request->validate([
            'company_name' => ['required'],
            'position_held' => ['required'], 
            'duration' => ['required'], 
            'reference_name' => ['required'], 
            'reference_contact' => ['required']
        ]);

       

        Employment::create([
            'user_id' => $id,
            'company_name' => $fields['company_name'],
            'position_held' => $fields['position_held'],
            'duration' => $fields['duration'],
            'reference_name' => $fields['reference_name'],
            'reference_contact' => $fields['reference_contact']
        ]);


        
        return  redirect()->back();
        
    }

    public function add_to_class(Request $request,$slug){

        $class =  Classes::where('slug',$slug)->first();

        foreach ($request->learners as $id) {
            $class->learner()->attach($id);
        
        }
         
         return redirect()->back();


        
    }
}
