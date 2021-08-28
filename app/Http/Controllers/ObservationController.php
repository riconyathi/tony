<?php
/**
 * 
 * code by Rico Nyathi
 * nexgen 
 * Date 23/08/2021
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Observation;

class ObservationController extends Controller{
    public function observation(){
        $observation = Observation::where('user_id',$this->getLearnerID())->first();
        return view('observation',compact('observation'));
    }

    public function store(Request $request){
    if(auth()->user()->role == "assessor"){
        $fields = $request->validate([
            'assessment_criteria' => ['required'],
            'model_evidence' => ['required'],
            'evidence_observed' => ['required'],
            'requirents_met' => ['required'],
            'action_required' => ['required'],
            'assessor_feedback' => ['required'],
            'assessor_signature' => ['required'],
            'assessor_date' => ['required']
        ]);
        $fields['user_id'] = $this->getLearnerID();
        Observation::updateOrCreate($fields);

    }else{
        Observation::where('user_id', $this->getLearnerID())
                     ->update([
                        'learner_comments' => $request->learner_comments,
                        'learner_signature' => $request->learner_signature,
                         'learner_date' => $request->learner_date
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
