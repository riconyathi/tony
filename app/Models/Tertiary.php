<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tertiary extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','institution','course','duration','modules','year_obtained', 'document'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
