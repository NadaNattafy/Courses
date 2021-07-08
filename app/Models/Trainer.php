<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
class Trainer extends Model
{
    use HasFactory;

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
        'speciality'
    ];

    public function setPasswordAttribute($value)
    {
        if (!empty($value)) {
        $this->attributes['password'] = Hash::make($value);
       }
    }

    public function course(){

        return $this->hasMany(Course::class);
    }
}
