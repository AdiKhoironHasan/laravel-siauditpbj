<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function rencana(){
        return $this->belongsTo(Rencana::class);
    }

    public function desk(){
        return $this->belongsTo(Desk::class);
    }
}
