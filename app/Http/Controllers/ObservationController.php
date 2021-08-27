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
        return view('observation');
    }

    public function store(Request $request){
        $fields = $request->validate([
            'user_id' => ['required'],
            'assessment_criteria' => ['required'],
            'model_evidence' => ['required'],
            'evidence_observed' => ['required'],
            'requirents_met' => ['required'],
            'action_required' => ['required'],
            'learner_comments' => ['required'],
            'assessor_feedback' => ['required'],
            'learner_signature' => ['required'],
            'learner_date' => ['required'],
            'assessor_signature' => ['required'],
            'assessor_date' => ['required']
        ]);

        Observation::updateOrCreate($fields);
    
        return redirect()->back();
    }
}
