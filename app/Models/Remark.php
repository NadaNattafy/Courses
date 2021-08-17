<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    use HasFactory;

    protected $dates = ['approval_date','created_at', 'updated_at', 'deleted_at' ];

    protected $fillable = [
        'title',
        'body',
        'trainer_id',
        'user_id'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function trainer(){

        return $this->belongsTo(Trainer::class);
    }

    public function formattedDate()
{
    return $this->created_at->format('M d Y');
}
}
