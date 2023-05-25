<?php


use App\Http\Controllers\dashboard;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\StockController;

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Fragment\RoutableFragmentRenderer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('MainMenu');
});
Route::get('/', function () {
    return view('MainMenu');
})->name('MainMenu');
Route::get('/stock', function () {
    return view('stock');
});
Route::get('/transaksi', function () {
    return view('transaksi');
});
Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/TambahStock', function () {
    return view('TambahStock');
});
Route::get('/Tambahpelanggan', function () {
    return view('Tambahpelanggan');
});

Route::get('/KonfirmasiTransaksi', function () {
    return view('KonfirmasiTransaksi');
});
Route::get('/edit', function () {
    return view('Edittransaksi');
});

Route::get('/TambahTransaksi', function () {
    return view('TambahTransaksi');
});

Route::get('/pilih', function () {
    return view('TambahTransaksiawal');
});


Route::get('/bayar', function () {
    return view('bayar');
});

Route::post('/submit-pembayaran', function () {
    return view('pembayaran');
});

Route::post('/login', [LoginController::class, 'login_action']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/home', function () {
    return view('Home');
});

Route::get("/dashbord", [StockController::class, "edit"]);

Route::get("/dashbord/{barang}",[DashbordController::class, "detail"]);

