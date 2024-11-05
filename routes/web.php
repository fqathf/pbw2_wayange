<?php

use App\Http\Controllers\AkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WayangController;

Route::get('/', function () {
    return view('wayang.index');
});

// Route::group(['prefix' => 'admin', 'middleware' ['auth'], 'as' => 'admin'], function(){
// });
Route::get('/admin/register', [AkunController::class, 'formRegister'])->name('admin.register');
Route::post('/admin/register', [AkunController::class, 'register'])->name('admin.register');
Route::get('/admin/login', [AkunController::class, 'formLogin'])->name('admin.login');
Route::post('/admin/login', [AkunController::class, 'login'])->name('admin.login');

Route::get('/wayang', [WayangController::class, 'index'])->name('wayang.index');
Route::get('/wayang/create', [WayangController::class, 'create'])->name('wayang.create');
Route::post('/wayang/store', [WayangController::class, 'store'])->name('wayang.store');
Route::get('/wayang/{id}/edit', [WayangController::class, 'edit'])->name('wayang.edit');
Route::put('/wayang/{id}', [WayangController::class, 'update'])->name('wayang.update');
Route::delete('/wayang/{id}', [WayangController::class, 'destroy'])->name('wayang.destroy');
Route::get('/wayang/filter', [WayangController::class, 'filter'])->name('wayang.filter');
Route::get('/wayang/search', [WayangController::class, 'search'])->name('wayang.search');