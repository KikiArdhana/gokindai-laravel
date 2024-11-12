<?php
<<<<<<< HEAD

use Illuminate\Support\Facades\Route;
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\DiskonController;
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

// Tambahkan grup dashboard
Route::prefix('dashboard')->group(function () {
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::resource('member', MemberController::class);
    Route::resource('poin', PoinController::class);
    Route::resource('level', LevelController::class);
    Route::resource('diskon', DiskonController::class);
});
>>>>>>> e7119f55440785593f92f1bb45b223a2ff507ab0
