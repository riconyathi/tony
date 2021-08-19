<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','slug'
    ];


    public function setSlugAttribute($value)
    {
        
        $date = Carbon::now()->timestamp;
        $this->attributes['slug'] = Str::slug($date.'-'.strtolower($value));
    }

    public function classes(){
        return $this->hasMany(Classes::class);
    }

    public function admin(){
        return $this->hasMany(Admin::class);
    }

    
}
