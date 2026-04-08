<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'layanan_id',
        'user_id',
        'nama',
        'no_telp',
        'tanggal',
        'catatan',
        'status',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}