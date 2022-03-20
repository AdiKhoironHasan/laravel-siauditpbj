<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rencana(){
        return $this->belongsTo(Rencana::class);
    }

    public function timeline(){
        return $this->hasOne(Timeline::class);
    }
}
