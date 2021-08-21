<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learner;
use App\Models\Unit_standard;
use App\Models\Feedback;
use App\Models\Review;
use App\Models\LearnerEvaluation;

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

    public function review_update(Request $request){

        $fields = $request->validate([
            'user_id' => ['required'],
            'us_id' => ['required'],
            'q1' => ['required'],
            'q2' => ['required'],
            'q3' => ['required'],
            'q4' => ['required'],
            'q5' => ['required'],
            'q6' => ['required'],
            'q7' => ['required'],
            'q8' => ['required'],
            'q9' => ['required'],
            'q10' => ['required'],
             'assessor_signature' => ['required'],
            'assessor_date' => ['required'],
        ]);


    Review::updateOrCreate($fields); 

        return redirect()->back();
        
    }

    public function assessment_evaluation() {
        $datas = Learner::with('school.classes.unit_standard')->where('user_id',auth()->user()->id)->first();
        $list =[];
        foreach($datas->school->classes[0]->unit_standard as $unit_standard){
           $list[] = $unit_standard->id;
        }

        $us = Unit_standard::whereIn('id',$list)->paginate(1);

        return view('assessment_evaluation',compact('us'));
    }

    public function assessment_evaluation_update(Request $request) {

        $fields = $request->validate([
            'user_id' => ['required'],
            'us_id' => ['required'],
            'q1' => ['required'],
            'q2' => ['required'],
            'q3' => ['required'],
            'q4' => ['required'],
            'q5' => ['required'],
            'q6' => ['required'],
            'q7' => ['required'],
            'q8' => ['required'],
            'q9' => ['required'],
            'q10' => ['required'],
            'q11' => ['required'],            
            'learner_signature' => ['required'],
            'learner_date' => ['required'],
            'assessor_signature' => ['required'],
            'assessor_date' => ['required'],
            'moderator_signature' => ['required'],
            'moderator_date' => ['required'],
        ]);
        
        
        LearnerEvaluation::updateOrCreate($fields); 

        return redirect()->back();
    }
}
