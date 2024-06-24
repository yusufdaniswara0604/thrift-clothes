<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
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
=======
Route::get('/register', function () {
    return view('register');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/detail', function () {
    return view('detail');
});
