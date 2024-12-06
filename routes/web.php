<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sekolah',[SekolahController::class, 'index'])->name('sekolah');
Route::get('/tambahsiswa', [SekolahController::class, 'tambahcrud'])->name('tambahcrud');
Route::get('/insertcrud', [SekolahController::class, 'insertcrud'])->name('insertcrud');
