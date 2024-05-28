<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';
    protected $guarded = ['id'];

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}

