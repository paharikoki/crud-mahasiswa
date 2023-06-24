<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardController::class,'index'])->name('home');
// Route::resource('mahasiswa', MahasiswaController::class);
// Route::resource('fakultas', FakultasController::class);
Route::prefix('mahasiswa')->group(function(){
    Route::get('/',[MahasiswaController::class,'index'])->name('mahasiswa.index');
    Route::get('/{id}/show',[MahasiswaController::class,'show'])->name('mahasiswa.show');
    Route::get('/create',[MahasiswaController::class,'create'])->name('mahasiswa.create');
    Route::post('/create',[MahasiswaController::class,'store'])->name('mahasiswa.store');
    Route::get('/{id}/edit',[MahasiswaController::class,'edit'])->name('mahasiswa.edit');
    Route::put('/{id}/update',[MahasiswaController::class,'update'])->name('mahasiswa.update');
    Route::get('/{id}/delete',[MahasiswaController::class,'destroy'])->name('mahasiswa.destroy');
});
Route::prefix('fakultas')->group(function(){
    Route::get('/',[FakultasController::class,'index'])->name('fakultas.index');
    Route::get('/{id}/show',[FakultasController::class,'show'])->name('fakultas.show');
    Route::get('/create',[FakultasController::class,'create'])->name('fakultas.create');
    Route::post('/create',[FakultasController::class,'store'])->name('fakultas.store');
    Route::get('/{id}/edit',[FakultasController::class,'edit'])->name('fakultas.edit');
    Route::put('/{id}/update',[FakultasController::class,'update'])->name('fakultas.update');
    Route::get('/{id}/delete',[FakultasController::class,'destroy'])->name('fakultas.destroy');
});
Route::prefix('prodi')->group(function(){
    Route::get('/',[ProdiController::class,'index'])->name('prodi.index');
    Route::get('/{id}/show',[ProdiController::class,'show'])->name('prodi.show');
    Route::get('/create',[ProdiController::class,'create'])->name('prodi.create');
    Route::post('/create',[ProdiController::class,'store'])->name('prodi.store');
    Route::get('/{id}/edit',[ProdiController::class,'edit'])->name('prodi.edit');
    Route::put('/{id}/update',[ProdiController::class,'update'])->name('prodi.update');
    Route::get('/{id}/delete',[ProdiController::class,'destroy'])->name('prodi.destroy');
});
Route::get('/docs', function () {
    return view('docs.index');
})->name('docs');
// Route::resource('prodi', ProdiController::class);
// Route::prefix('mahasiswa')->group(function(){
//     Route::get('/', [MahasiswaController::class,'index'])->name('mahasiswa.index');
//     Route::post('/create', [MahasiswaController::class,'store'])->name('mahasiswa.store');
//     Route::get('/fetch-last-nim',[MahasiswaController::class,'generateNim']);
// });