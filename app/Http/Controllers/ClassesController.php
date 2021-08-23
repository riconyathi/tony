<?php

/**
 * 
 * code by Rico Nyathi
 * nexgen 
 * Date 23/08/2021
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Unit_standard;
use App\Models\Learner;
use App\Models\School;
use App\Models\User;

class ClassesController extends Controller{
    public function index($slug){
        $school =  School::with('admin.user','classes.assessor','classes.moderator')->where('slug',$slug)->first();
        
        $users = User::where('role','assessor')->orWhere('role', 'moderator')->get();

        $learners = Learner::with('user')->where('school_id',$school->id)->get();

        return view('school_details',compact('school','users','learners'));
        
    }

    public function store(Request $request){
        //validate input fields
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'school_id' => ['required']
        ]);
        
       // create class
        $school = Classes::create([
            'name'=> $fields['name'],
            'slug'=> $fields['name'],
            'school_id'=> $fields['school_id'],
        ]);

        return redirect()->back();
        
    }

    public function destroy(){
        //implement me please 
        return view('classes');
        
    }

    public function add_us(Request $request,$slug){
      
        $class =  Classes::where('slug',$slug)->first();
    
        foreach ($request->unit_standards as $us_id) {
            $class->unit_standard()->attach($us_id);
        }
        
         
         return redirect()->back();
     
   }


public function add_assessor(Request $request){
      
    Classes::where('id',$request->class_id)
        ->update([ 
            'assessor_id' => $request->assessor_id    
        ]);
     
     return redirect()->back();
 
}

public function add_moderator(Request $request){
      
    Classes::where('id',$request->class_id)
        ->update([ 
            'moderator_id' => $request->moderator_id    
        ]);
     
     return redirect()->back();
 
}

public function remove_moderator(Request $request){
      
    Classes::where('id',$request->class_id)
        ->update([ 
            'moderator_id' => null    
        ]);
     
     return redirect()->back();
 
}

public function remove_assessor(Request $request){
      
    Classes::where('id',$request->class_id)
        ->update([ 
            'assessor_id' => null   
        ]);
     
     return redirect()->back();
 
}


   public function view($slug){
        
    $school =  School::where('slug',$slug)->first();
    
    
    return view('view_class',compact('school'));
  
}

public function class_details($slug){
        
    $class =  Classes::withCount('unit_standard')->with('Unit_standard','learner','assessor','moderator')->where('slug',$slug)->first();
    $unit_standards = Unit_standard::all();
    $learners = Learner::where('school_id',$class->school_id)->get();
    
    return view('view_class',compact('class', 'unit_standards','learners'));
  
}

public function students($slug){

    $learners = User::get();
    
    $classLearners = User::get();
  
  return view('students',compact('learners'));
  }
}
