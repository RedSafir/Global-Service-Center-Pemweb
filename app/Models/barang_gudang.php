<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang_gudang extends Model
{
    use HasFactory;
    
    protected $table = "barang_gudang";

    protected $primaryKey = "id";

    protected $guarded = [
        "id"
    ];

    public function perbaikan()
    {
        return $this->hasMany(Perbaikan::class);
    }
}
