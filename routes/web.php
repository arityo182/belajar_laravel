<?php

use App\Http\Controllers\pelangganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produkController;
use Illuminate\Support\Facades\View;

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
