<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JatahCutiController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('LP_Cuti_Pegawai/index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('dashboard')->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

        //Kelurahan
        Route::prefix('divisi')->group(function () {

            Route::get('/', [DivisiController::class, 'index']);
            Route::get('/show/{id}', [DivisiController::class, 'show']);

            Route::middleware('administrator')->group(function(){
            Route::get('/create', [DivisiController::class, 'create']);
            Route::post('/store', [DivisiController::class, 'store']);
            Route::get('/edit/{id}', [DivisiController::class, 'edit']);
            Route::put('/update/{id}', [DivisiController::class, 'update']);
            Route::delete('/destroy/{id}', [DivisiController::class, 'destroy']);
            });
        });

        Route::prefix('jatahcuti')->group(function () {

            Route::get('/', [JatahCutiController::class, 'index']);
            Route::get('/show/{id}', [JatahCutiController::class, 'show']);

            Route::middleware('administrator')->group(function(){
            Route::get('/create', [JatahCutiController::class, 'create']);
            Route::post('/store', [JatahCutiController::class, 'store']);
            Route::get('/edit/{id}', [JatahCutiController::class, 'edit']);
            Route::put('/update/{id}', [JatahCutiController::class, 'update']);
            Route::delete('/destroy/{id}', [JatahCutiController::class, 'destroy']);
            });
        });

        Route::prefix('pegawai')->group(function () {

            Route::get('/', [PegawaiController::class, 'index']);
            Route::get('/show/{id}', [PegawaiController::class, 'show']);

            Route::middleware('administrator')->group(function(){
            Route::get('/create', [PegawaiController::class, 'create']);
            Route::post('/store', [PegawaiController::class, 'store']);
            Route::get('/edit/{id}', [PegawaiController::class, 'edit']);
            Route::put('/update/{id}', [PegawaiController::class, 'update']);
            Route::delete('/destroy/{id}', [PegawaiController::class, 'destroy']);
            });
        });

        Route::prefix('pengajuan')->group(function () {

            Route::get('/', [PengajuanController::class, 'index']);
            Route::get('/create', [PengajuanController::class, 'create']);
            Route::post('/store', [PengajuanController::class, 'store']);
            Route::get('/show/{id}', [PengajuanController::class, 'show']);
            Route::get('/edit/{id}', [PengajuanController::class, 'edit']);
            Route::put('/update/{id}', [PengajuanController::class, 'update']);

            Route::middleware('administrator')->group(function(){
            Route::delete('/destroy/{id}', [PengajuanController::class, 'destroy']);
            });
        });

    });
});

require __DIR__.'/auth.php';
