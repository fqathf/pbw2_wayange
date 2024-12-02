<?php

use App\Http\Controllers\AkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WayangController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizListController;
use App\Http\Controllers\QuizResultController;
use App\Http\Controllers\CharacterController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/quiz/{id}', [QuizController::class, 'show'])->name('quiz.show');
Route::post('/quiz/result', [QuizController::class, 'result'])->name('result');
Route::get('/quizzes', [QuizListController::class, 'index'])->name('quiz.list');
Route::post('/quiz/result', [QuizResultController::class, 'showResult'])->name('quiz.result');
Route::get('/character/{id}', [CharacterController::class, 'show'])->name('character.show');


// Route::group(['prefix' => 'admin', 'middleware' ['auth'], 'as' => 'admin'], function(){
// });
Route::get('/admin/register', [AkunController::class, 'formRegister'])->name('admin.register');
Route::post('/admin/register', [AkunController::class, 'register'])->name('admin.register');
Route::get('/admin/login', [AkunController::class, 'formLogin'])->name('admin.login');
Route::post('/admin/login', [AkunController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [AkunController::class, 'logout'])->name('admin.logout');

Route::get('/admin/wayang', [WayangController::class, 'index'])->name('wayang.index');
Route::get('/admin/wayang/create', [WayangController::class, 'create'])->name('wayang.create');
Route::post('/admin/wayang/store', [WayangController::class, 'store'])->name('wayang.store');
Route::get('/admin/wayang/{id}/edit', [WayangController::class, 'edit'])->name('wayang.edit');
Route::put('/admin/wayang/{id}', [WayangController::class, 'update'])->name('wayang.update');
Route::delete('/admin/wayang/{id}', [WayangController::class, 'destroy'])->name('wayang.destroy');
Route::get('/admin/wayang/filter', [WayangController::class, 'filter'])->name('wayang.filter');
Route::get('/admin/wayang/search', [WayangController::class, 'search'])->name('wayang.search');