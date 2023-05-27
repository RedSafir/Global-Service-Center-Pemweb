<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perbaikan extends Model
{
    use HasFactory;

    protected $table = "perbaikan";

    protected $primaryKey = "id";

    protected $guarded = [
        "id"
    ];

    public function barang_gudang()
    {
        return $this->belongsTo(Barang_gudang::class);
    }

    public function barang_pelanggan()
    {
        return $this->belongsTo(Barang_pelangan::class);
    }
}
