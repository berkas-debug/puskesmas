<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    }
    return view('index_pembuka');
});

Route::get('/tidak-ada', function () {
    return view('errors.404');
});

Route::get('/login-pasien', function () {
    return view('auth.login_pasien');
})->name('login-pasien');

Route::get('/register-pasien', function () {
    return view('auth.register_pasien');
})->name('register-pasien');

Route::get('/login-dokter', function () {
    return view('auth.login_dokter');
})->name('login-dokter');

Route::get('/visi-misi', function () {
    return view('visimisi');
})->name('visi-misi');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');

Route::post('/hitung-imt', [App\Http\Controllers\IMTController::class, 'hitung'])->name('hitung.imt');

Auth::routes();


Route::middleware(['auth', 'role:dokter'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

