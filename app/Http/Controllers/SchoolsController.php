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
        ]);

        $school = School::create([
            'name'=> $fields['name'],
            'slug'=> $fields['name']
        ]);

        
        return redirect('/schools');

    }
    public function destroy($id){
        
        $school = School::findOrFail($id);

        $school->delete();

        return redirect('/schools');   
    }
    
}
