<?php

use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;

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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [TransaksiController::class, 'index'])->name('home');
    Route::get('detail-transaksi', [TransaksiController::class, 'create'])->name('detail-transaksi');
    Route::get('detail-transaksi/{id}', [TransaksiController::class, 'edit'])->name('detail.edit');
    Route::get('detail-transaksi/preview/{id}', [TransaksiController::class, 'preview'])->name('detail.preview');
    Route::post('detail-transaksi', [TransaksiController::class, 'store'])->name('detail.store');
    Route::put('detail-transaksi/{id}', [TransaksiController::class, 'update'])->name('detail.update');
    Route::get('mpp/{id}', [TransaksiController::class, 'print'])->name('mpp');
    Route::get('po/{id}', [TransaksiController::class, 'po'])->name('po');
    Route::get('po-cust/{id}', [TransaksiController::class, 'po_cust'])->name('po-cust');
});
