<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function  desk()
    {
        return $this->belongsTo(Desk::class);
    }
}
