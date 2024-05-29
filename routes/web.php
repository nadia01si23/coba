<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PasienController;
Route::get('/pasien/show',
    [PasienController::class, 'show']
);


Route::get('/', function () {
    return view('welcome');
});
//route menggunakan get berarti mengambil fungsi didalam controller
//route menggunakan resources berarti mengambil class
//route dengan menggunakan name atau by name
Route::get('/admin', [AdminController::class, 'index']);

// Praktikum Laravel ke-3
Route::get('/admin/kelurahan', [KelurahanController::class, 'index']);


// Praktikum Laravel ke-4
Route::get('/admin/kelurahan/create', [KelurahanController::class, 'create']);
Route::get('/admin/kelurahan/store', [KelurahanController::class, 'store']);
Route::get('/admin/kelurahan/show/{id}', [KelurahanController::class, 'show']);