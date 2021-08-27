<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    use HasFactory;

    protected $fillable = [
        'us_id','user_id','formative','summative',
        'other'
    ];

    public function user(){

        return $this->belongsTo(User::class);
     }

     public function unit_standard(){

        return $this->belongsTo(Unit_standard::class,  'us_id');
     
}

}