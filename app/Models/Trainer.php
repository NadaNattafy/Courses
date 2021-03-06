<?php

namespace App\Models;

use App\Traits\passwordTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\photoTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
class Trainer extends Authenticatable
{
    use HasFactory, passwordTrait, photoTrait;

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

    public function course(){

        return $this->hasMany(Course::class);
    }

    public function remark(){

        return $this->hasMany(Remark::class);
    }

    public function interest(){

        return $this->belongsToMany(Interest::class, 'trainer_interests');
    }

    public function cv(){

        return $this->hasOne(Cv::class);
    }
}
