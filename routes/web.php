<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController; // Tambahkan ini
use App\Http\Controllers\MenuController;    // Tambahkan ini
use App\Http\Controllers\TransaksiController; // Tambahkan ini
use App\Http\Controllers\MemberController;   // Tambahkan ini
use App\Http\Controllers\PoinController;     // Tambahkan ini
use App\Http\Controllers\LevelController;    // Tambahkan ini
use App\Http\Controllers\DiskonController;   // Tambahkan ini

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function () {
    return view('dashboard');
});

Route::resource('pegawai', PegawaiController::class);
Route::resource('menu', MenuController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('member', MemberController::class);
Route::resource('poin', PoinController::class);
Route::resource('level', LevelController::class);
Route::resource('diskon', DiskonController::class);
