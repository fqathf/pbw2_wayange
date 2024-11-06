<?php

use App\Http\Controllers\AkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WayangController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizListController;
use App\Http\Controllers\QuizResultController;

Route::get('/', function () {
    return view('landing');
});

Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quiz.show');
Route::post('/quiz/result', [QuizController::class, 'result'])->name('result');
Route::get('/quizzes', [QuizListController::class, 'index'])->name('quiz.list');
Route::post('/quiz/result', [QuizResultController::class, 'showResult'])->name('quiz.result');


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