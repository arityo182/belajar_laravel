<?php

use App\Http\Controllers\pelangganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\produkController2;
use App\Http\Controllers\kategoriController;

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

Route::get('/produk', [produkController::class, 'index']);
Route::get('/produk/store', [produkController::class, 'store']);
Route::get('/produk/update', [produkController::class, 'update']);
Route::get('/produk/delete', [produkController::class, 'delete']);
Route::get('/produk/show', [produkController::class, 'show']);

Route::get('/halaman', function () {
    $title = 'Harry Pooter';
    $konten = 'harry potter and the deathly hallows: part 2';
    return view('konten.halaman', compact('title', 'konten'));
    // return view('konten.halaman', ['title' => $title, 'konten' => $konten]);
    // return View::make('konten.halaman', compact('title', 'konten'));
    // return View::make(['konten.halaman', 'title'], $title);
});

Route::get('/pelanggan', [pelangganController::class, 'index']);
// Route::resource('produk2', 'produkController2.php');
Route::apiResource('produk2', produkController2::class);
Route::get('/kategori', [kategoriController::class, 'index']);
Route::get('/kategori/store', [kategoriController::class, 'store']);
Route::get('/kategori/update', [kategoriController::class, 'update']);
Route::get('/kategori/delete', [kategoriController::class, 'delete']);
