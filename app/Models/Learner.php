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
        'last_school',
        'highest_grade',
        'subjects_passed'
    ];
    public function classes(){

        return $this->belongsToMany(Classes::class, 'class_learner', 'class_id', 'learner_id');
     }

     public function user(){

        return $this->belongsTo(User::class);
     }
}
