<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    Usercontroller,
    GenreController,
    CastController
};

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


Route::get('/index', [Usercontroller::class,'index']);
Route::get('/master', [Usercontroller::class,'master']);

//route untuk menampilakn form genre 
Route::get('/genre/create', [GenreController::class, 'create'])->name('genre.create');
Route::post('/genre', [GenreController::class, 'store'])->name('genre.store');
Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
Route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
Route::put('/genre/{id}', [GenreController::class, 'update'])->name('genre.update');
Route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');
Route::delete('/genre/{id}', [GenreController::class, 'destroy'])->name('genre.delete');

//route casts
Route::get('/cast', [CastController::class, 'index'])->name('casts.index');
Route::get('/cast/create', [CastController::class, 'create'])->name('casts.create');
Route::post('/cast', [CastController::class, 'store'])->name('casts.store');
Route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('casts.edit');
Route::put('/cast/{id}', [CastController::class, 'update'])->name('casts.update');
Route::delete('/cast/{id}', [CastController::class, 'destroy'])->name('casts.delete');