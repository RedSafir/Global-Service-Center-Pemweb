<?php

namespace App\Http\Controllers;

use App\Models\Barang_gudang;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        $dashbord = Pelanggan::all();
        dd($dashbord);
    }

    public function detail(Barang_gudang $barang)
    {
        $dashbord = Pelanggan::findOrFail($barang);
        dd($dashbord);
    }

    public function tambah()
    {
        
    }
}
