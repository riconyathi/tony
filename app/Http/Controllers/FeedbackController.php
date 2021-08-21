<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learner;
use App\Models\Unit_standard;
use App\Models\Feedback;

class FeedbackController extends Controller{
    public function feedback(){
        $datas = Learner::with('school.classes.unit_standard')->where('user_id',auth()->user()->id)->first();
        $list =[];
        foreach($datas->school->classes[0]->unit_standard as $unit_standard){
           $list[] = $unit_standard->id;
        }

        $us = Unit_standard::whereIn('id',$list)->paginate(1);
      
        
        return view('feedback',compact('us'));

    }

    public function store(Request $request){
        
           //validate incoming 
           $fields = $request->validate([
            'user_id' => ['required'],
            'us_id' => ['required'],
            'attempt' => ['required'],
            'knowledge_questionare' => ['required' ],
            'practical_questionare' => ['required'],
            'overall' => ['required'],
            'comments' => ['required'],
            'action_plan' => ['required'],
            'learner_signature' => ['required'],
            'learner_date' => ['required'],
            'assessor_signature' => ['required'],
            'assessor_date' => ['required'],
        ]);

        Feedback::updateOrCreate($fields);
       return redirect()->back(); 
    }

    public function review(){
    
        return view('review');
    }

    public function assessment_evaluation($value='') {
        return view('assessment_evaluation');
    }
}
