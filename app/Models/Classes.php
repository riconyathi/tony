<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','slug','school_id','assessor_id','moderator_id'
    ];

    public function setSlugAttribute($value)
    {
        $date = Carbon::now()->timestamp;
        $this->attributes['slug'] = Str::slug($date.'-'.strtolower($value));
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function unit_standard()
    {
         return $this->belongsToMany(Unit_standard::class, 'class_unit_standard', 'class_id', 'us_id');
     }

     public function learner()
    {
         return $this->belongsToMany(Learner::class, 'class_learner', 'class_id', 'learner_id');
     }

     public function assessor()
    {
         return $this->belongsTo(User::class);
     }

     public function moderator()
    {
         return $this->belongsTo(User::class);
     }
}
