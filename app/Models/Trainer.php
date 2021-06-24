<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'expertise'
    ];

    public function course(){

        return $this->hasMany(Course::class);
    }
}
