<?php
/**
 * 
 * code by Rico Nyathi
 * nexgen 
 * Date 23/08/2021
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\User;
use App\Models\Learner;
use App\Models\Classes;

class IndexController extends Controller{
    public function index(){
        return view('front.index');
    }
    public function service(){
        return view('front.services');
    }
    public function project(){
        return view('front.projects');
    }
    public function contact(){
        return view('front.contact');
    }
    public function about(){
        return view('front.about');
    }
   public function home(){
     
    if(Auth::check()){

        if(auth()->user()->role== 'admin'){

            $admin =  Admin::with('school.classes')->where('user_id',auth()->user()->id)->first();
            $school = $admin->school;
            
            $users = User::where('role','assessor')->orWhere('role', 'moderator')->get();
    
            $learners = Learner::with('user')->where('school_id',$school->id)->get();

            return view('school_details',compact('school','users','learners'));
        }

        if(auth()->user()->role== 'assessor'||auth()->user()->role== 'moderator' ||auth()->user()->role== 'mentor'){

            $classes = Classes::where('assessor_id', auth()->user()->id)
                                ->orWhere('moderator_id', auth()->user()->id)
                                ->get();

            return view('class_view',compact('classes'));
        }

        return view('index');
    }

    return redirect("login")->withSuccess('You are not allowed to access');
   }

   public function assesment(Request $request,$id){
        $user = User::where('identinty',$id)->first();
        session()->put('learner', $user);
      
    return view('assesment');
   }
}
