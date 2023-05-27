<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang_gudang;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stocks = Barang_gudang::all();
        return view("stock", [
            "stocks"=>$stocks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tambah.TambahStock");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang_gudang::create([
            "nama_barang"=>$request->nama,
            "keterangan"=>$request->jenis,
            "harga"=>$request->harga,
            "stock"=> $request->stock
        ]);
        
        return redirect()->back();
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
        $barang = Barang_gudang::where("id", $id)->first();
        return view("edit.EditStock", ["barang"=>$barang]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Barang_gudang::where("id", $id)->update([
            "nama_barang"=>$request->nama,
            "keterangan"=>$request->jenis,
            "harga"=>$request->harga,
            "stock"=>$request->stock
        ]);
        
        return redirect("/Stock");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang_gudang::find($id);
        $barang->delete();
        return redirect()->back();
    }
}
