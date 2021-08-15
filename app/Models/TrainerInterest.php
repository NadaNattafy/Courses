<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerInterest extends Model
{
    use HasFactory;

    protected $fillable = [
        'trainer_id',
        'interest_id',
    ];

    public function trainer(){

        return $this->belongsTo(Trainer::class,'trainer_id','id');
    }

    public function interest(){

        return $this->belongsTo(Interest::class);
    }
}
