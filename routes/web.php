<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
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

Route::get('/landing', function () {
    return view('landing');
});
