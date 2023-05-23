<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\barang_gudang;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function index()
    {
        $stock = barang_gudang::all();
    }

    public function edit()
    {
        $test = DB::table("pelanggan")->where("id", 1)->update(["nama"=>"nugraha"]);
        dd($test);
    }
}
