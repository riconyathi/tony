<?php
/**
 * 
 * code by Rico Nyathi
 * nexgen 
 * Date 23/08/2021
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit_standard;
use App\Models\Classes;
use App\Models\Learner;
use App\Models\User;
use App\Models\Evidence;
use Illuminate\Support\Facades\Storage;

class Unit_standardController extends Controller{
  //these 2 functions have same code why? index & view
    public function index(){
      //get all unit standards
      $unit_standards =  Unit_standard::all();
       
      return view('unit_standard',compact('unit_standards'));
    }

    

    public function view_details($name){
        //get unit standard details using name 
      $unit_standard =  Unit_standard::where('us_name',$name)->first();
       
      return view('view_unit_standard_details',compact('unit_standard'));
    }

    public function details($name){
      
      //get unit standard details with user evidence that belong to user
      
      $us =  Unit_standard::where('us_name',$name)->first();
      
      $unit_standard = Evidence::with('unit_standard')
                  ->where('us_id',$us->id)
                  ->where('user_id',$this->getLearnerID())
                  ->first();
       
      return view('view_unit_standard',compact('unit_standard'));
    }

    public function learner_details($name){
      
      //get unit standard details with user evidence that belong to user
      
      $us =  Unit_standard::where('us_name',$name)->first();
      
      $unit_standard = Evidence::with('unit_standard')
                  ->where('us_id',$us->id)
                  ->where('user_id',$this->getLearnerID())
                  ->first();
       
      return view('view_unit_standard_learner',compact('unit_standard','us'));
    }

    public function store(Request $request){
        
        $file;
        $us_copies;
        $us_alignment;
        $learner_guide;
        $formative;
        $summative;
        $other;


          //validate incoming 
          $fields = $request->validate([
            'us_name' => ['unique:unit_standards','required','min:3', 'max:255'],
            'us_title' => ['required','min:3', 'max:255'],
            'us_level' => ['required' ,'min:3', 'max:255'],
            'us_credit' => ['required','min:3', 'max:255'],

        ]);

       
        //store documents
        if($request->file('us_copies')){
         $file = $request->file('us_copies');
         $us_copies = time().'_'.$request->file('us_copies')->getClientOriginalName();
         $file->storeAs('us_docs', $us_copies, 'public');
        }
        //
        if($request->file('us_alignment')){
        $file = $request->file('us_alignment');
        $us_alignment = time().'_'.$request->file('us_alignment')->getClientOriginalName();
        $file->storeAs('us_docs', $us_alignment, 'public');
        }
        // //
        if($request->file('learner_guide')){
        $file = $request->file('learner_guide');
        $learner_guide = time().'_'.$request->file('learner_guide')->getClientOriginalName();
        $file->storeAs('us_docs', $learner_guide, 'public');
        }
        // //
        if($request->file('formative')){
        $file = $request->file('formative');
        $formative = time().'_'.$request->file('formative')->getClientOriginalName();
        $file->storeAs('us_docs', $formative, 'public');
        }
        //  //
         if($request->file('summative')){
         $file = $request->file('summative');
         $summative = time().'_'.$request->file('summative')->getClientOriginalName();
         $file->storeAs('us_docs', $summative, 'public');
         }
        //  //
         if($request->file('other')){
        $file = $request->file('other');
         $other = time().'_'.$request->file('other')->getClientOriginalName();
         $file->storeAs('us_docs', $other, 'public');
         }

        Unit_standard::create([
            'us_name' => $request->us_name,
            'us_title' => $request->us_title,
            'us_level'=>$request->us_level,
            'us_credit'=>$request->us_credit,

            'us_copies'=> $us_copies,
            'us_alignment'=> $us_alignment,
            'learner_guide' => $learner_guide,
            'formative' => $formative,
            'summative' => $summative,
            'other' => $other
        ]);

        return redirect()->back();
    }

    public function edit(Request $request){
        
      $file;
      $us_copies = "";
      $us_alignment = "";
      $learner_guide = "";
      $formative = "";
      $summative = "";
      $other = "";


        //validate incoming 
        $fields = $request->validate([
          'us_title' => ['required','min:3', 'max:255'],
          'us_level' => ['required' ],
          'us_credit' => ['required'],
      ]);

      $unit_standard = Unit_standard::find($request->id);
      //store documents
      if($request->file('us_copies')){
      //  delete document if exist
      $this->removeFile($unit_standard->us_copies);
       $file = $request->file('us_copies');
       $us_copies = time().'_'.$request->file('us_copies')->getClientOriginalName();
       $file->storeAs('us_docs', $us_copies, 'public');
      }
      //
      if($request->file('us_alignment')){
        //  delete document if exist
      $this->removeFile($unit_standard->us_alignment);
      $file = $request->file('us_alignment');
      $us_alignment = time().'_'.$request->file('us_alignment')->getClientOriginalName();
      $file->storeAs('us_docs', $us_alignment, 'public');
      }
      // //
      if($request->file('learner_guide')){
        //  delete document if exist
      $this->removeFile($unit_standard->learner_guide);
      $file = $request->file('learner_guide');
      $learner_guide = time().'_'.$request->file('learner_guide')->getClientOriginalName();
      $file->storeAs('us_docs', $learner_guide, 'public');
      }
      // //
      if($request->file('formative')){
        //  delete document if exist
      $this->removeFile($unit_standard->formative);
      $file = $request->file('formative');
      $formative = time().'_'.$request->file('formative')->getClientOriginalName();
      $file->storeAs('us_docs', $formative, 'public');
      }
      //  //
       if($request->file('summative')){
         //  delete document if exist
      $this->removeFile($unit_standard->summative);
       $file = $request->file('summative');
       $summative = time().'_'.$request->file('summative')->getClientOriginalName();
       $file->storeAs('us_docs', $summative, 'public');
       }
      //  //
       if($request->file('other')){
         //  delete document if exist
      $this->removeFile($unit_standard->other);
       $file = $request->file('other');
       $other = time().'_'.$request->file('other')->getClientOriginalName();
       $file->storeAs('us_docs', $other, 'public');
       }

     // update unit standard
       
       $unit_standard->us_name = $request->us_name;
       $unit_standard->us_title = $request->us_title;
       $unit_standard->us_level = $request->us_level;
       $unit_standard->us_credit =$request->us_credit;
       
       if($us_copies !=""){
        $unit_standard->us_copies =$us_copies;
       }
       if($us_alignment !=""){
        $unit_standard->us_alignment =$us_alignment;
       }
       if($learner_guide !=""){
        $unit_standard->learner_guide =$learner_guide;
       }
       if($formative !=""){
        $unit_standard->formative =$formative;
       }
       if($summative !=""){
        $unit_standard->summative =$summative;
       }
       if($other !=""){
        $unit_standard->other =$other;
       }
                      
      $unit_standard->save();

      return redirect()->back();
  }

    public function class_us($slug){
      //fetch unit standards using class slug
        $class = Classes::with('unit_standard')->where('slug',$slug)->get();
         
        $unit_standards = $class[0]->unit_standard;
        return view('class_unit_standard',compact('unit_standards'));
      }


      public function section_2(){
        //get laerner data using user id
        $datas = Learner::with('school.classes.unit_standard')->where('user_id',$this->getLearnerID())->first();
        return view('section_2',compact('datas'));   
    }

    //unlink files
    public function removeFile($path){
      $file = "us_docs/".$path; 
      Storage::delete($file);
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


