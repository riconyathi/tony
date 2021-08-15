<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObservationController extends Controller{
    public function observation(){
        return view('observation');
    }
}
