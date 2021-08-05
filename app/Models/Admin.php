<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Traits\passwordTrait;

class Admin extends Model
{
    use HasFactory;
    use passwordTrait;

    protected $fillable = [
        'name',
        'password',
        'email'
    ];

    // public function setPasswordAttribute($value)
    // {
    //     if (!empty($value)) {
    //     $this->attributes['password'] = Hash::make($value);
    //    }
    // }

}
