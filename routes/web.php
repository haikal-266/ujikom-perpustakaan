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

// User

Route::get('/', function () {
    return view('public.post.home');
});

// Route::get('/admin', function () {
//     return view('home');
// });

Route::get('/create_buku', function () {
    return view('private.post.create');
});
Route::get('/create_kg', function () {
    return view('private.post.create_category');
});

Route::get('/kategori', function () {
    return view('private.post.kategori');
});

Route::get('/peminjaman', function () {
    return view('private.post.peminjaman');
});
Route::get('/ulasan', function () {
    return view('private.post.ulasan');
});


// Backend

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/index', [App\Http\Controllers\PostBukuController::class, 'index'])->name('index');

Route::get('/kategori', [App\Http\Controllers\PostKategoriController::class, 'index'])->name('kategori');

Route::post('/store/buku', [App\Http\Controllers\PostBukuController::class, 'store'])->name('store/buku');

Route::get('/buku/edit/{id}', [App\Http\Controllers\PostBukuController::class, 'edit'])->name('buku/edit');

Route::put('/buku/edit/', [App\Http\Controllers\PostBukuController::class, 'Update'])->name('buku/update');

Route::get('/buku/ulas/{id}', [App\Http\Controllers\PostUlasanController::class, 'ulas'])->name('buku/ulas');

Route::delete('/buku/destroy/{id}', [App\Http\Controllers\PostBukuController::class, 'destroy'])->name('buku/destroy');

// Route::delete('/delete/buku/{BukuID}', [App\Http\Controllers\PostBukuController::class, 'delete'])->name('delete/buku');

Route::post('/store/pj/{id}', [App\Http\Controllers\PostPeminjamanController::class, 'store'])->name('store/pj');


Route::post('/store/kg', [App\Http\Controllers\PostKategoriController::class, 'store'])->name('store/kg');


Route::post('/store/ulasan', [App\Http\Controllers\PostUlasanController::class, 'store'])->name('store/ulasan');






