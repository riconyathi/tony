<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Learner extends Model
{
    use HasFactory;

    public function classes(){

        return $this->belongsToMany(Classes::class, 'class_learner', 'class_id', 'learner_id');
     }

     public function user(){

        return $this->belongsTo(User::class);
     }
}
