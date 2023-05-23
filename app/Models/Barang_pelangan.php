<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_pelangan extends Model
{
    use HasFactory;

    protected $table = "barang_pelanggan";

    protected $primaryKey = "id";

    protected $guarded = [
        "id"
    ];

    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class);
    }

    public function perbaikan()
    {
        return $this->hasMany(perbaikan::class);
    }
}
