<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;

    protected $fillable = [
        'cv',
        'url',
        'trainer_id'
    ];

    public function trainer(){

        return $this->belongsTo(Trainer::class);
    }
}
