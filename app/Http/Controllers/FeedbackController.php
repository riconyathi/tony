<?php
/**
 * 
 * code by Rico Nyathi
 * nexgen 
 * Date 23/08/2021
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learner;
use App\Models\Unit_standard;
use App\Models\Feedback;
use App\Models\Review;
use App\Models\LearnerEvaluation;

class FeedbackController extends Controller{
    public function feedback(){
        $datas = Learner::with('school.classes.unit_standard')->where('user_id',$this->getLearnerID())->first();
        $list =[];
        

        foreach($datas->school->classes[0]->unit_standard as $unit_standard){
           $list[] = $unit_standard->id;
           
        }

       $listUS =  Unit_standard::whereIn('id',$list)->paginate(1);        

        $us = Feedback::whereHas('unit_standard', function ($query) {
                            return $query->where('user_id',$this->getLearnerID());
                        })->get();

        
        
        return view('feedback',compact('us','listUS'));

    }

    public function store(Request $request){
        if(auth()->user()->role == 'assessor'){
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
            'assessor_signature' => ['required'],
            'assessor_date' => ['required'],
        ]);

        Feedback::updateOrCreate($fields);
        }else{
            $fields = $request->validate([
                'user_id' => ['required'],
                'us_id' => ['required'],
                'learner_signature' => ['required'],
                'learner_date' => ['required'],
            ]);
            Feedback::where('user_id', $request->user_id )
                     ->where('us_id', $request->us_id )
                     ->update([
                         'learner_signature' => $request->learner_signature,
                         'learner_date' => $request->learner_date 
                            ]);
        }
           
       return redirect()->back(); 
    }

   

    public function review(){
        $datas = Learner::with('school.classes.unit_standard')->where('user_id',$this->getLearnerID())->first();
        $list =[];
        

        foreach($datas->school->classes[0]->unit_standard as $unit_standard){
           $list[] = $unit_standard->id;
           
        }

       $listUS =  Unit_standard::whereIn('id',$list)->paginate(1); 
        return view('review',compact('listUS'));
    }

    public function review_update(Request $request){
       $reviews = Review::where('user_id',$this->getLearnerID())
               ->where('us_id',$request->us_id)
               ->get();
        
        if(count($reviews) == 0){
            
        $fields = $request->validate([
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

        $fields['user_id'] = $this->getLearnerID();
      
        Review::create($fields); 
    }else{
        
        $fields = $request->validate([
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

        Review::where('user_id', $this->getLearnerID())
                     ->where('us_id', $request->us_id )
                     ->update([
                        'us_id' => $request->us_id,
                        'q1' => $request->q1,
                        'q2' => $request->q2,
                        'q3' => $request->q3,
                        'q4' => $request->q4,
                        'q5' => $request->q5,
                        'q6' => $request->q6,
                        'q7' => $request->q7,
                        'q8' => $request->q8,
                        'q9' => $request->q9,
                        'q10' => $request->q10,
                         'assessor_signature' => $request->assessor_signature,
                        'assessor_date' => $request->assessor_date,
                            ]);
    }
        return redirect()->back();
        
    }

    public function assessment_evaluation() {
        $datas = Learner::with('school.classes.unit_standard')->where('user_id',$this->getLearnerID())->first();
        $list =[];
        foreach($datas->school->classes[0]->unit_standard as $unit_standard){
           $list[] = $unit_standard->id;
        }

        $us = Unit_standard::whereIn('id',$list)->paginate(1);

        return view('assessment_evaluation',compact('us'));
    }

    public function assessment_evaluation_update(Request $request) {
        if(auth()->user()->role == 'learner'){
        $fields = $request->validate([
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
            'learner_date' => ['required']
        ]);
        $fields['user_id'] = $this->getLearnerID();
        LearnerEvaluation::updateOrCreate($fields); 
    } else if(auth()->user()->role == 'assessor'){
        LearnerEvaluation::where('user_id', $this->getLearnerID()  )
                     ->where('us_id', $request->us_id )
                     ->update([
                         'assessor_signature' => $request->assessor_signature,
                         'assessor_date' => $request->assessor_date 
                            ]);

    } else if(auth()->user()->role == 'moderator'){
        LearnerEvaluation::where('user_id', $this->getLearnerID()  )
                     ->where('us_id', $request->us_id )
                     ->update([
                         'moderator_signature' => $request->moderator_signature,
                         'moderator_date' => $request->moderator_date 
                            ]);

    }
        
        

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
