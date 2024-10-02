<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/siswa',[SiswaController::class,'index']);
Route::get('/siswa/tambah',[SiswaController::class,'tambahData']);
Route::post('/siswa/simpan',[SiswaController::class,'simpanData']);
Route::get('/siswa/{id}',[SiswaController::class,'detail']);
Route::get('/siswa/{id}/hapus',[SiswaController::class,'hapusData']);
Route::get('/siswa/{id}/edit',[SiswaController::class,'tampilanEdit']);
Route::post('/siswa/simpanEdit/{id}',[SiswaController::class,'editData']);