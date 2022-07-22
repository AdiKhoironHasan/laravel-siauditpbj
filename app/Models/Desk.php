<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kerja_desk()
    {
        return $this->belongsTo(KerjaDesk::class);
    }

    // public function timeline()
    // {
    //     return $this->hasOne(Timeline::class);
    // }

    // public function visit()
    // {
    //     return $this->hasOne(Visit::class);
    // }
}
