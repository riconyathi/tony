<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluationController extends Controller{
    public function assessment_evaluation($value='') {
        return view('assessment_evaluation');
    }
    
}
