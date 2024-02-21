<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('private.post.index');
});

Route::get('/create_buku', function () {
    return view('private.post.create');
});
Route::get('/create_kg', function () {
    return view('private.post.create_category');
});
Route::get('/peminjaman', function () {
    return view('private.post.peminjaman');
});
Route::get('/ulasan', function () {
    return view('private.post.ulasan');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/store', [App\Http\Controllers\PostBukuController::class, 'store'])->name('store');

Route::post('/store/buku', [App\Http\Controllers\PostBukuController::class, 'store'])->name('store/buku');

Route::post('/store/kg', [App\Http\Controllers\PostKategoriController::class, 'store'])->name('store/kg');

Route::post('/store/pj', [App\Http\Controllers\PostPeminjamanController::class, 'store'])->name('store/pj');

Route::post('/store/ulasan', [App\Http\Controllers\PostUlasanController::class, 'store'])->name('store/ulasan');






