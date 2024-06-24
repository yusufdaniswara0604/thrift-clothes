<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/index', function () {
    return view('index');
});


Route::get('/detail', function () {
    return view('detail');
});
