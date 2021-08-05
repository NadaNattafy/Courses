<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\photoTrait;
use Illuminate\Database\Eloquent\Model;

class UserOpinion extends Model
{
    use HasFactory;
    use photoTrait;

    protected $fillable = [
        'name',
        'description',
        'img'
    ];
}
