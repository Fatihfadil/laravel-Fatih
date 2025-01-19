<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/1', function () {
//    return view('Tugas1');
//});

//Route::get('/2', function () {
//    return view('Tugas2');
//});

//Route::get('/3', function () {
//    return view('Tugas3');
//});


Route::get('/1', [Usercontroller::class,'Tugas1']);
Route::get('/2', [Usercontroller::class, 'Tugas2']);
Route::get('/tem/master', [Usercontroller::class, 'master']);
Route::get('/index', [Usercontroller::class, 'index']);