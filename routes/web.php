<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\lihatPasien;

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

// ==================================================
// <<<<<<<<<< ROUTE UNTUK DASHBOARD ADMIN >>>>>>>>>>>
// ==================================================

Route::get('/', function () {
    return view('loginAndRegister/login', [
        "title" => " Silahkan Login",
        "judul" => "Halaman Login",
        "active" => "Login"
    ]);
});
 
Route::get('/dashboard', function () {
    return view('dashboard/dashboard', [
        "title" => " Dashboard RSUD Bagas Waras",
        "judul" => "Dashboard",
        "active" => "Dashboard"
    ]);
});

Route::get('/inputData', function () {
    return view('dashboard/inputPasien', [
        "title" => " Input Data Pasien",
        "judul" => "Form Input Pasien",
        "active" => "Input Pasien"
    ]);
});

Route::get('/lihatData', function () {
    return view('dashboard/lihatPasien', [
        "title" => " Lihat Daftar Pasien",
        "judul" => "List Daftar Pasien",
        "active" => "Daftar Pasien"
    ]);
});

Route::get('/profilKaryawan', function () {
    return view('dashboard/profilKaryawan', [
        "title" => " Profil Karyawan",
        "judul" => "Data Pegawai",
        "active" => "Profil Karyawan"
    ]);
});

// =====================================================
// <<<<<<<<<< ROUTE UNTUK LOGIN DAN REGISTER >>>>>>>>>>>
// =====================================================

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// ==================================================
// <<<<<<<<<< ROUTE UNTUK FITUR DASHBOARD >>>>>>>>>>>
// ==================================================

Route::resource('/contact', lihatPasien::class);
