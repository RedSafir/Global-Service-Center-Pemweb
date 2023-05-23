<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = "pelanggan";

    protected $primaryKey = "id";

    protected $guarded = [
        "id"
    ];

    public function transaksi()
    {
        return $this->hasMany(transaksi::class);
    }

    public function barang_pelanggan()
    {
        return $this->hasMany(barang_pelanggan::class);
    }
}
