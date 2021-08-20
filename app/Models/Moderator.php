<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moderator extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','moderator_number','document'
    ];

    public function user(){

        return $this->belongsTo(User::class);
     }
}
