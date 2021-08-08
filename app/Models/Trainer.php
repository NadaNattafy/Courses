<?php

namespace App\Models;

use App\Traits\passwordTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
class Trainer extends Authenticatable
{
    use HasFactory, passwordTrait;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'state',
        'gender',
        'password',
        'course',
        'field',
        'qualified',
        'expertise',
        'specialty',
        'img'
    ];

    // public function setPasswordAttribute($value)
    // {
    //     if (!empty($value)) {
    //     $this->attributes['password'] = Hash::make($value);
    //    }
    // }

    public function course(){

        return $this->hasMany(Course::class);
    }

    public function remark(){

        return $this->hasMany(Remark::class);
    }

    public function interest(){

        return $this->hasMany(Interest::class);
    }

    public function cv(){

        return $this->hasOne(Cv::class);
    }
}
