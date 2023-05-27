<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('home', ["transaksis" => $transaksi]);
    }

    public function detail($id)
    {
        $invoice = Transaksi::find($id);
        return view("BayarBon", ["invoice" => $invoice]);
    }
}
