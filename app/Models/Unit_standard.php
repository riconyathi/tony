<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit_standard extends Model
{
    use HasFactory;

    protected $fillable = [
        'us_name','us_title','us_level','us_credit','us_copies',
        'us_alignment','learner_guide','formative','summative',
        'other'
    ];

    public function classes(){

    return $this->belongsToMany(Classes::class, 'class_unit_standard', 'class_id', 'us_id');
 }
    
}
