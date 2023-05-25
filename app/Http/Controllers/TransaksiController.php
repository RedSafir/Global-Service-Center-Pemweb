<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\Barang_gudang;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $model = Transaksi::all();

        return view("Transaksi", ["transaksis"=>$model]);
    }

    // public function konfirmasi()
    // {
    //     $model = Transaksi::all();
    //     return view("Transaksi", ["transaksis"=>$model]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $items = Barang_gudang::all();
        return view("tambah.TambahTransaksiAwal", [
            "pelanggans"=>$pelanggan,
            "items"=>$items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Transaksi();
        $model->invoice = $request->kode_invoice;
        $model->nama_barang = $request->nama_barang;
        $model->pelanggan_id = $request->pelanggan;
        $model->kerusakan = $request->kerusakan;
        $model->id_barang_gudang = $request->item_perlu;
        $model->jumlah_butuh = $request->jumlah;
        $model->tot_harga = $request->biaya_service;
        $model->foto_barang = null;
        $model->status = FALSE;
        $model->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $transaksi = DB::table("transaksi")->where("id", $id)->first();
        return view("DetailTransaksi", ["transaksi"=>$transaksi]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
