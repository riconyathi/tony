<?php
/**
 * 
 * code by Rico Nyathi
 * nexgen 
 * Date 23/08/2021
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evidence;

class EvidenceController extends Controller
{
    public function upload(Request $request){


        
        $file;
        $formative;
        $summative;
        $other = null;


        if($request->file('formative')){
        $file = $request->file('formative');
        $formative = time().'_'.$request->file('formative')->getClientOriginalName();
        $file->storeAs('evidence', $formative, 'public');
        }
        //  //
         if($request->file('summative')){
         $file = $request->file('summative');
         $summative = time().'_'.$request->file('summative')->getClientOriginalName();
         $file->storeAs('evidence', $summative, 'public');
         }
        //  //
         if($request->file('other')){
        $file = $request->file('other');
         $other = time().'_'.$request->file('other')->getClientOriginalName();
         $file->storeAs('evidence', $other, 'public');
         }

        Evidence::create([
            'us_id' => $request->us_id,
            'user_id' => auth()->user()->id,
            'formative' => $formative,
            'summative' => $summative,
            'other' => $other
        ]);

        return redirect()->back();

    }
}
