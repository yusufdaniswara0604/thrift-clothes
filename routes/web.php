<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;


Route::get('/landing', function () {
    return view('landing');
});



Route::get('/katalog', function () {
    return view('katalog');
});


Route::get('/crud', function () {
    return view('crud');
});

Route::get('/page', function () {
    return view('page');
});

Route::get('/tambah', function () {
    return view('tambah');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/pelanggan', function () {
    return view('pelanggan');
});

Route::get('/detailbarang', function () {
    return view('detailbarang');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/detail', function () {
    return view('detail');
});


// Route untuk menampilkan form create barang
Route::get('/barangs/create', [BarangController::class, 'create'])->name('barangs.create');

// Route untuk menyimpan data barang baru
Route::post('/barangs', [BarangController::class, 'store'])->name('barangs.store');

// Route untuk menampilkan daftar barang
Route::get('/barangs', [BarangController::class, 'index'])->name('barangs.index');

// Route untuk menampilkan form edit barang
Route::get('/barangs/{barang}/edit', [BarangController::class, 'edit'])->name('barangs.edit');

// Route untuk mengupdate data barang
Route::put('/barangs/{barang}', [BarangController::class, 'update'])->name('barangs.update');

// Route untuk menghapus data barang
Route::delete('/barangs/{barang}', [BarangController::class, 'destroy'])->name('barangs.destroy');
