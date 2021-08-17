<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\Traits\passwordTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin  extends Authenticatable
{
    use HasFactory;
    use passwordTrait;

    protected $fillable = [
        'name',
        'password',
        'email'
    ];


}
