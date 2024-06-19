<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/katalog', function () {
    return view('katalog');
});


