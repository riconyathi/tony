<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'identinty',
        'email',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

   
        public function learners()
        {
            return $this->hasOne(Learner::class);
        }

        public function tertiary(){
            return $this->hasMany(Tertiary::class);
        }

        public function employment(){
            return $this->hasMany(Employment::class);
        }

        public function assessor()
        {
            return $this->hasOne(Assessor::class);
        }

        public function moderator()
        {
            return $this->hasOne(Moderator::class);
        }

        public function classes(){

            return $this->belongsToMany(Classes::class, 'class_user', 'class_id', 'user_id');
         }
}
