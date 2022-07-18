<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KerjaVisit extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function visit()
    {
        return $this->hasOne(Visit::class);
    }

    public function kerja_desk()
    {
        return $this->belongsTo(KerjaDesk::class);
    }
}
