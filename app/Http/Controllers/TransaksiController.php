<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\Barang_gudang;
use App\Models\Barang_pelangan;
use App\Models\Perbaikan;
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

    public function konfirmasi()
    {
        $bayars = Transaksi::all();

        return view("KonfirmasiTransaksi", ["bayars" => $bayars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggan = Pelanggan::all();
        $items = Barang_gudang::all();
        return view("tambah.TambahTransaksiAwal", [
            "pelanggans"    =>$pelanggan,
            "items"         =>$items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->file('gambar')->move("barang/", $request->file("gambar")->getClientOriginalName());

        $barang_pelanggan = Barang_pelangan::create([
            "pelanggan_id"  =>  $request->pelanggan,
            "nama_barang"   =>  $request->nama_barang,
            "foto_barang"   =>  $request->file("gambar")->getClientOriginalName()
        ]);

        $barang_gudang = Barang_gudang::find($request->item_perlu);
        
        $barang_sisa = $barang_gudang->stock - $request->item_perlu;

        $barang_gudang->stock = $barang_sisa;
        $barang_gudang->save();

        $perbaikan_id = Perbaikan::create([
            "barang_pelanggan_id"   =>  $barang_pelanggan->id,
            "barang_gudang_id"      =>  $request->item_perlu,
            "status"                =>  False,
            "kerusakan"             =>  $request->kerusakan,
            "jumlah_butuh"          =>  $request->jumlah,
        ]);

        Transaksi::create([
            "perbaikan_id"  =>  $perbaikan_id->id,
            "pelanggan_id"  =>  $request->pelanggan,
            "invoice"       =>  $request->kode_invoice,
            "status_trans"  =>  False,
            "status_pick"   =>  False,
            "tot_harga"     =>  $request->biaya_service,
        ]);

        return redirect()->back()->with('refresh', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaksi = Transaksi::find($id);

        return view("DetailTransaksi", ["transaksi" =>$transaksi]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $transaksi = Transaksi::find($id);

        return view("DetailTransaksi", ["transaksi" =>$transaksi]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Perbaikan::find($id)->update([
            "status"    => $request->status,
        ]);

        $request->file('gambar')->move("barang/", $request->file("gambar")->getClientOriginalName());

        Barang_pelangan::where("nama", $request->nama_member)->update([
            "foto_barang"   =>$request->$request->file("gambar")->getClientOriginalName()
        ]);

        return redirect("/Transaksi")->with('refresh', true);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
