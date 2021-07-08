<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

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
        'last_name',
        'mobile',
        'email',
        'password',
        'gender',
        'message_id'
    ];

    public function setPasswordAttribute($value)
    {
        if (!empty($value)) {
        $this->attributes['password'] = Hash::make($value);
       }
    }

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

    public function course()
    {

        return $this->belongsToMany(Course::class, 'usre_courses')->withPivot('value');

    }

    public function review(){

        return $this->hasMany(Review::class);
    }

    public function cv(){

        return $this->hasMany(Cv::class);
    }

    public function message(){

        return $this->belongsTo(Message::class);
    }

}
