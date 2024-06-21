<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
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