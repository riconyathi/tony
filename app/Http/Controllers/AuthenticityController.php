<?php
/**
 * 
 * code by Rico Nyathi
 * nexgen 
 * Date 23/08/2021
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authenticity;

class AuthenticityController extends Controller
{
   public function index(){

   } 

   public function authenticity(Request $request){

    //dd($request);
    $fields = $request->validate([
        'user_id' => ['required'],
        'learner_name' => ['required'],
        'identinty' => ['required'],
        'learner_signature' => ['required'],
        'learner_date' => ['required'],            
        'assessor_name' => ['required'],
        'assessor_registration_number' => ['required'],
        'assessor_signature' => ['required'],
        'assessor_date' => ['required'],
        'moderator_name' => ['required'],
        'moderator_registration_number' => ['required'],
        'moderator_signature' => ['required'],
        'moderator_date' => ['required'],
    ]);

    

    Authenticity::updateOrCreate($fields); 

        return redirect()->back();
    }
}
