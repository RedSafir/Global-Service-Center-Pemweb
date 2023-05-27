<?php

namespace App\Http\Controllers;

use App\Models\Barang_gudang;
use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BayarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bayar = Transaksi::all();
        return view("KonfirmasiTransaksi", ["bayars"=>$bayar]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bayar = Transaksi::where("id", $id)->first();
        $pelanggan = Pelanggan::find($bayar->pelanggan_id)->nama;
        return view("tambah.TambahBayar", ["bayar"=>$bayar, "pelanggan"=>$pelanggan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bayar = Transaksi::where("id", $id)->first();
        $bayarBaru = $bayar->tot_harga - $request->jumlah_pembayaran;

        $status = False;
        
        if(!($bayar->status_trans)){
            $status = True;
            $bayarBaru = 0;
        } 
            

        Transaksi::where("id", $id)->update([
            "tot_harga"=>$bayarBaru,
            "status_trans"=>$status
        ]);

        return redirect("/Bayar");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
