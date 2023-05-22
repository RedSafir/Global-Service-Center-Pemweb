<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $guarded = [
        "id"
    ];

    public function perbaikan()
    {
        return $this->belongsTo(perbaikan::class);
    }

    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class);
    }
}
