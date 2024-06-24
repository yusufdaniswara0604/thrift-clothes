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