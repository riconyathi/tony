<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolsController extends Controller{
    
    public function index(){
        $schools = School::all();
        return view('schools',compact('schools'));   
    }

    public function store(Request $request){

        //validate incoming name
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'contact_person' => ['required', 'min:3'],
            'identity' => ['required', 'min:8'],
            'password' => ['required','confirmed', 'min:8'],
        ]);

        $school = School::create([
            'name'=> $fields['name'],
            'slug'=> $fields['name']
        ]);

        
        return redirect('/schools');

    }

    // public function view($slug){
        
    //     $school = School::where('slug',$slug)->first();

        

    //     return vew('',compact('school'));   
    // }
    public function destroy($id){
        
        $school = School::findOrFail($id);

        $school->delete();

        return redirect('/schools');   
    }
    
}
