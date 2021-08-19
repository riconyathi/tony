<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'position_held',
        'duration',
        'reference_name',
        'reference_contact'
    ];
    public function user(){

        return $this->belongsTo(User::class);
    }
}
