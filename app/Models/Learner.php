<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    use HasFactory;

    protected $fillable = [
       'citizenship',
        'marital_status',
        'residential_address',
        'work_address',
        'phone',
        'home_phone',
        'user_id',
        'school_id',
        'last_school',
        'highest_grade',
        'subjects_passed'
    ];
    

     public function user(){

        return $this->belongsTo(User::class);
     }

     public function school(){

        return $this->belongsTo(School::class);
     }
}
