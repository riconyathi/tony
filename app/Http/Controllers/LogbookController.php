<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logbook;
class LogbookController extends Controller
{
    public function index(){
        return view('section_5');
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
}
