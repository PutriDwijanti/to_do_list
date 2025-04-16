<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;

// =======================
// Halaman Utama
// =======================
Route::get('/', function () {
    return view('welcome');
});

// =======================
// Signup & Login
// =======================
Route::get('/signup', [SignupController::class, 'show'])->name('signup');
Route::post('/signup', [SignupController::class, 'register'])->name('signup.submit');

Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// =======================
// API & Wilayah
// =======================
Route::get('/api/provinsi', [WilayahController::class, 'getProvinsiAPI']);
Route::get('/wilayah', [WilayahController::class, 'showWilayah']);

// Menampilkan halaman pulau berdasarkan wilayah
Route::get('/wilayah/{wilayah}', [WilayahController::class, 'showPulau']);

// =======================
// Pulau & Provinsi
// =======================
// Menampilkan halaman pulau
Route::get('/pulau/{pulau}', function ($pulau) {
    return view('pulau.index', ['pulau' => $pulau]);
})->name('pulau.index');

// Jika ingin controller juga handle halaman pulau
// (boleh dihapus jika cukup pakai view langsung di atas)
Route::get('/provinsi/{namaProvinsi}', [WilayahController::class, 'showProvinsi']);

// Menampilkan halaman provinsi dalam suatu pulau
Route::get('/pulau/{pulau}/{provinsi}', function ($pulau, $provinsi) {
    $viewPath = 'provinsi.' . str_replace('-', '', strtolower($provinsi)) . '.index';

    if (view()->exists($viewPath)) {
        return view($viewPath, [
            'pulau' => $pulau,
            'provinsi' => $provinsi
        ]);
    }

    return abort(404);
})->name('provinsi.index');

// =======================
// Cerita Rakyat
// =======================
Route::get('/cerita-rakyat', function () {
    return view('jawaBarat.ceritaRakyat.daftarCerita');
});

Route::get('/cerita-rakyat/jawa-barat/{slug}', function ($slug) {
    return view('detailCerita', ['slug' => $slug]);
});

Route::get('/cerita-rakyat/jawa-tengah/{slug}', function ($slug) {
    return view('detailCerita', ['slug' => $slug]);
});
Route::get('/pulau/jawa/{wilayah}', [WilayahController::class, 'show']);

Route::get('/pulau/{pulau}/{wilayah}', [WilayahController::class, 'show']);


// =======================
// isiWilayah (DYNAMIC VIEW)
// =======================
Route::get('/wilayah/{namaWilayah}/isiWilayah', function ($namaWilayah) {
    $view = 'wilayah.isiWilayah';

    if (view()->exists($view)) {
        return view($view, ['namaWilayah' => $namaWilayah]);
    }

    return abort(404);
})->name('isiWilayah');

Route::get('/wilayah/jawa/JawaBarat', function () {
    return view('jawaBarat.index');
});

