<?php

namespace App\Http\Controllers;

use App\Models\Barang_gudang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Barang_gudang::all();
        return view("stock", ["stocks"=>$stocks]);
    }

    public function edit()
    {
        $test = DB::table("pelanggan")->where("id", 1)->update(["nama"=>"nugraha"]);
        dd($test);
    }

    public function tambah()
    {
        // $model = new Barang_gudang();
        // $model->nama_barang = $barang->nama;
        // $model->keterangan = $barang->jenis;
        // $model->harga = $barang->harga;
        // $model->stock = $barang->stock;
        // dd($model);
        return view("TambahStock");
    }


}
