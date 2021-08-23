<?php
/**
 * 
 * code by Rico Nyathi
 * nexgen 
 * Date 23/08/2021
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller{
    public function account(){
        return view('account');
    }
}
