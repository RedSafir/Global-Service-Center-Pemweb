<?php

use App\Http\Controllers\BayarController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;
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

/* ============================================= Main Route ======================================== */
Route::get('/', function () {
    return view('MainMenu');
});

Route::get('/awal', function () {
    return view('awal');
});

Route::get('/', function () {
    return view('MainMenu');
})->name('MainMenu');

Route::get('/home', [HomeController::class, "index"]);

Route::get("/home/{id}", [HomeController::class, "detail"]);

Route::post('/login', [LoginController::class, 'login_action']);

Route::get('/logout', [LoginController::class, 'logout']);

/*============================================== Stock Route =========================================*/
Route::get("/Stock", [StockController::class, "index"]);

Route::get("/Stock/TambahStock", [StockController::class, "create"]);

Route::post("/Stock", [StockController::class, "store"]);

Route::get("/Stock/UpdateStock/{id}/Edit", [StockController::class, "edit"]);

Route::put("/Stock/UpdateStock/{id}", [StockController::class, "update"]);

Route::delete("/Stock/{id}", [StockController::class, "destroy"]);

/* =============================================== Transaksi ========================================== */
Route::get('/Transaksi', [TransaksiController::class, "index"]);

Route::get('/Transaksi/TambahTransaksi',[TransaksiController::class, "create"]);

Route::post('/Transaksi',[TransaksiController::class, "store"]);

Route::get('/Transaksi/Konfirmasi', [TransaksiController::class, "konfirmasi"]);

Route::get('/Transaksi/Detail/{id}/Ubah', [TransaksiController::class, "show"]);

Route::put('/Transaksi/Detail/{id}', [TransaksiController::class, "show"]);

/* ================================================ Pembayaran ========================================== */
Route::get('/Bayar', [BayarController::class, "index"]);

Route::get('/Bayar/Pembayaran/{id}/Bayar', [BayarController::class, "edit"]);

Route::put('/Bayar/Pembayaran/{id}', [BayarController::class, "update"]);

Route::Post('/Bayar', [BayarController::class, "store"]);

/* ============================================== Pelanggan ================================================ */
Route::get('/Pelanggan',[PelangganController::class, "index"]);

Route::get('/Pelanggan/TambahPelanggan', [PelangganController::class, "create"]);

Route::Post("/Pelanggan/TambahPelanggan", [PelangganController::class, "store"]);

Route::delete('/Pelanggan/{id}',[PelangganController::class, "destroy"]);

Route::get("/Pelanggan/EditPelanggan/{id}/Edit", [PelangganController::class, "edit"]);

Route::put("/Pelanggan/EditPelanggan/{id}", [PelangganController::class, "update"]);










