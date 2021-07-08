<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'trainer_id',
        'img',
    ];

    public function trainer(){

        return $this->belongsTo(Trainer::class);
    }

    public function comment(){

        return $this->hasMany(Comment::class);
    }

    public function user()
    {

        return $this->belongsToMany(User::class, 'usre_courses')->withPivot('value');

    }

    public function lesson(){

        return $this->hasMany(Lesson::class);
    }

    public function review(){

        return $this->hasMany(Review::class);
    }

}
