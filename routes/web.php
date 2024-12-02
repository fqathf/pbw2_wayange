<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MuseumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WayangController;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => ['auth', 'role:Admin']], function(){
    Route::get('/admin/wayang', [WayangController::class, 'index'])->name('admin.wayang.index');
    Route::get('/admin/wayang/create', [WayangController::class, 'create'])->name('admin.wayang.create');
    Route::post('/admin/wayang/store', [WayangController::class, 'store'])->name('admin.wayang.store');
    Route::get('/admin/wayang/{id}/edit', [WayangController::class, 'edit'])->name('admin.wayang.edit');
    Route::put('/admin/wayang/{id}', [WayangController::class, 'update'])->name('admin.wayang.update');
    Route::delete('/admin/wayang/{id}', [WayangController::class, 'destroy'])->name('admin.wayang.destroy');
    Route::get('/admin/wayang/filter', [WayangController::class, 'filter'])->name('admin.wayang.filter');
    Route::get('/admin/wayang/search', [WayangController::class, 'search'])->name('admin.wayang.search');

    Route::get('/admin/kategori', [KategoriController::class, 'index'])->name('admin.kategori.index');
    Route::get('/admin/kategori/create', [KategoriController::class, 'create'])->name('admin.kategori.create');
    Route::post('/admin/kategori', [KategoriController::class, 'store'])->name('admin.kategori.store');
    Route::get('/admin/kategori/{id_k}/edit', [KategoriController::class, 'edit'])->name('admin.kategori.edit');
    Route::put('/admin/kategori/{id_k}', [KategoriController::class, 'update'])->name('admin.kategori.update');
    Route::delete('/admin/kategori/{id}', [KategoriController::class, 'destroy'])->name('admin.kategori.destroy');
    Route::get('/admin/kategori/search', [KategoriController::class, 'search'])->name('admin.kategori.search');

    Route::get('/admin/museum', [MuseumController::class, 'index'])->name('admin.museum.index');
    Route::get('/admin/museum/create', [MuseumController::class, 'create'])->name('admin.museum.create');
    Route::post('/admin/museum/store', [MuseumController::class, 'store'])->name('admin.museum.store');
    Route::get('/admin/museum/{id}/edit', [MuseumController::class, 'edit'])->name('admin.museum.edit');
    Route::put('/admin/museum/{id}', [MuseumController::class, 'update'])->name('admin.museum.update');
    Route::delete('/admin/museum/{id}', [MuseumController::class, 'destroy'])->name('admin.museum.destroy');

    Route::get('/admin/berita', [BeritaController::class, 'index'])->name('admin.berita.index');
    Route::get('/admin/berita/create', [BeritaController::class, 'create'])->name('admin.berita.create');
    Route::post('/admin/berita/store', [BeritaController::class, 'store'])->name('admin.berita.store');
    Route::get('/admin/berita/{id}/edit', [BeritaController::class, 'edit'])->name('admin.berita.edit');
    Route::put('/admin/berita/{id}', [BeritaController::class, 'update'])->name('admin.berita.update');
    Route::delete('/admin/berita/{id}', [BeritaController::class, 'destroy'])->name('admin.berita.destroy');
});

// Route akun admin
Route::get('/admin/register', [AkunController::class, 'formRegister'])->name('admin.register');
Route::post('/admin/register', [AkunController::class, 'register'])->name('admin.register');
Route::get('/admin/login', [AkunController::class, 'formLogin'])->name('admin.login');
Route::post('/admin/login', [AkunController::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [AkunController::class, 'logout'])->name('admin.logout');

// Route akun user
Route::get('/register', [AkunController::class, 'formRegisterUser'])->name('register');
Route::post('/register', [AkunController::class, 'registerUser'])->name('register');
Route::get('/login', [AkunController::class, 'formLoginUser'])->name('login');
Route::post('/login', [AkunController::class, 'loginUser'])->name('login');
Route::get('/wayang', [WayangController::class, 'indexUser'])->name('wayang.index');
Route::get('/wayang/filter', [WayangController::class, 'filterUser'])->name('wayang.filter');
Route::get('/wayang/search', [WayangController::class, 'searchUser'])->name('wayang.search');
Route::get('/berita', [BeritaController::class, 'indexUser'])->name('berita.index');
Route::get('/museum', [MuseumController::class, 'indexUser'])->name('museum.index');

//Route::group(['middleware' => ['auth', 'role:User|Admin']], function(){
//
//});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
