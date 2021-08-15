<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Unit_standard;
use App\Models\Learner;
use App\Models\User;

class ClassesController extends Controller{
    public function index(){
        $classes = Classes::all();
        
        return view('classes',compact('classes'));
        
    }

    public function store(Request $request){

        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            //'school_id' => 'required'
        ]);

        $school = Classes::create([
            'name'=> $fields['name'],
            'slug'=> $fields['name'],
            'school_id'=> 1,
        ]);

        return redirect('/classes');
        
    }

    public function destroy(){
        return view('classes');
        
    }

    public function add_us(Request $request,$slug){
      
        $class =  Classes::where('slug',$slug)->first();
    
        foreach ($request->unit_standards as $us_id) {
            $class->unit_standard()->attach($us_id);
        }
        
         
         return redirect()->back();
     
   }

   public function add_learner(Request $request,$slug){
      
    $class =  Classes::where('slug',$slug)->first();

    foreach ($request->learners as $id) {
        $class->learner()->attach($id);
    
    }
     
     return redirect()->back();
 
}

   public function view($slug){
        
    $class =  Classes::withCount('unit_standard')->where('slug',$slug)->first();
    $unit_standards =  Unit_standard::all();
    
    return view('view_class',compact('class','unit_standards'));
  
}

public function students($slug){

    $learners = User::get();
    
    $classLearners = User::get();
  
  return view('students',compact('learners'));
  }
}
