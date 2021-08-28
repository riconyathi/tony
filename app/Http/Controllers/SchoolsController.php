<?php
/**
 * 
 * code by Rico Nyathi
 * nexgen 
 * Date 23/08/2021
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Mail\EmailUser;
use Illuminate\Support\Facades\Mail;

class SchoolsController extends Controller{
    
    public function index(){
        // get all schools with learner count and classes count

        $schools = School::withCount('classes')->with('admin.user')->get();
        return view('schools',compact('schools'));   
    }

    public function store(Request $request){

        //validate incoming name
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'contact_person' => ['required', 'min:3'],
            'contact_person_surname' => ['required', 'min:3'],
            'identinty' => ['required', 'min:8'],
            'password' => ['required','confirmed', 'min:8'],
        ]);
        $logo="";
        //serve logo to server
        if($request->file('logo')){
            $file = $request->file('logo');
            $logo = time().'_'.$request->file('logo')->getClientOriginalName();
            $file->storeAs('school_logos', $logo, 'public');
           }

        $school = School::create([
            'name'=> $fields['name'],
            'slug'=> $fields['name'],
            'logo'=>$logo
        ]);

        //Create admin
        
        $user = User::create([
            'identinty'=> $fields['identinty'],
            'name'=> $fields['contact_person'],
            'surname'=> $fields['contact_person_surname'],
            'password' => Hash::make($fields['password']),
            'role'=> 'admin'
            
        ]);

        //insert in admin table
        $users = Admin::create([
            'user_id'=> $user->id,
            'school_id'=> $school->id 
        ]);

        Mail::to('riconyathi@gmail.com')->send(new EmailUser());
 
        return redirect()->back();

    }

   
    public function destroy(Request $request){
        
        $school = School::findOrFail($request->School_id);
        if(auth()->user()->role == 'super-admin'){
        $school->delete();
        }
        return redirect()->back();   
    }
    
}
