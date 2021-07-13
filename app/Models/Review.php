<?php

namespace App\Models;
use AppRating;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

   // protected $table = 'reviews';

    protected $fillable = [
        'comment',
        'rate',
        'course_id',
        'user_id',
    ];

    public function course(){

        return $this->belongsTo(Course::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}



