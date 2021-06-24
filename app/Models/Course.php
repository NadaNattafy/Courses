<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'trainer_id'
    ];

    public function trainer(){

        return $this->belongsTo(Trainer::class);
    }

    public function user()
    {

        return $this->belongsToMany(User::class, 'usre_courses')->withPivot('value');

    }

}
