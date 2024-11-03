<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WayangController;

Route::get('/', function () {
    return view('wayang.index');
});

Route::get('/wayang', [WayangController::class, 'index'])->name('wayang.index');
Route::get('/wayang/create', [WayangController::class, 'create'])->name('wayang.create');
Route::post('/wayang/store', [WayangController::class, 'store'])->name('wayang.store');
Route::get('/wayang/{id}/edit', [WayangController::class, 'edit'])->name('wayang.edit');
Route::put('/wayang/{id}', [WayangController::class, 'update'])->name('wayang.update');
Route::delete('/wayang/{id}', [WayangController::class, 'destroy'])->name('wayang.destroy');