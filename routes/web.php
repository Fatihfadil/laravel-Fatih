<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('Tugas1');
});

Route::get('/2', function () {
    return view('Tugas2');
});

Route::get('/3', function () {
    return view('Tugas3');
});