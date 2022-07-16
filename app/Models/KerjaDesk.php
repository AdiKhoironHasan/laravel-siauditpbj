<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KerjaDesk extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function desk()
    {
        return $this->hasOne(Desk::class);
    }

    public function rencana()
    {
        return $this->belongsTo(Rencana::class);
    }
}
