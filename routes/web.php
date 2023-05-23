<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\StockController;
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
    return view('welcome');
});

Route::get("/dashbord", [StockController::class, "edit"]);

Route::get("/dashbord/{barang}",[DashbordController::class, "detail"]);

