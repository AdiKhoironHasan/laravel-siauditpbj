<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rencana extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // public function barang()
    // {
    //     return $this->belongsTo(Barang::class);
    // }

    public function auditor1()
    {
        return $this->belongsTo(User::class);
    }
    public function auditor2()
    {
        return $this->belongsTo(User::class);
    }
    public function auditor3()
    {
        return $this->belongsTo(User::class);
    }
    public function auditee()
    {
        return $this->belongsTo(User::class);
    }

    public function desk()
    {
        return $this->hasOne(Desk::class);
    }
}
