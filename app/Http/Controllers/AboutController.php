<?php
/**
 * 
 * code by Rico Nyathi
 * nexgen 
 * Date 23/08/2021
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AboutController extends Controller{
  
   public function about(){
       return view('about');
   }
}
