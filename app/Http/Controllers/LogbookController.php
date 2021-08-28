<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logbook;
class LogbookController extends Controller
{
    public function index(){
        $logbook = Logbook::where('user_id',$this->getLearnerID())->get();
        return view('section_5',compact('logbook'));
    }

    public function store(Request $request){
        
        $fields = $request->validate([
            'user_id' => ['required'],
            'date_done' => ['required'],
            'activity' => ['required'],
            'start_time' => ['required'],
            'end_time' => ['required']
        ]);
    
        
    
        Logbook::updateOrCreate($fields); 

        return redirect()->back();
    }

    public function getLearnerID(){
        $id;
        //get student ID
        if(auth()->user()->role == 'learner'){
            $id = auth()->user()->id;
        }else{

            $learner = session()->get('learner');
            $id =  $learner->id;
        }

        return $id;
    }
}
