<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view("Pelanggan", ["pelanggans" => $pelanggans]);
        // dd($pelanggans);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tambah.TambahPelanggan");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pelanggan::create([
            "nama"      =>$request->namapelanggan,
            "alamat"    =>$request->alamatpelanggan,
            "kelamin"   =>$request->jeniskelamin,
            "no_telp"   =>$request->nomorTelphone,
            "no_ktp"    =>$request->nomerKTP
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
        $pelanggan = Pelanggan::where("id", $id)->first();
        return view("edit.EditPelanggan", ["pelanggan"=>$pelanggan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Pelanggan::where("id", $id)->update([
            "nama"      =>$request->namapelanggan,
            "kelamin"   =>$request->jeniskelamin,
            "alamat"    =>$request->alamatpelanggan,
            "no_telp"   =>$request->nomorTelphone,
            "no_ktp"    =>$request->nomerKTP
        ]);
        return redirect("/Pelanggan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();
        return redirect()->back();
    }
}
