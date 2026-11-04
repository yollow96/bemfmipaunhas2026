<?php

use App\Http\Controllers\AnggotaController;
use App\Models\Anggota;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnggotaGuestController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogGuestController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\GaleriGuestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CarouselsController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\kirimEmailController;

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

/*Route::get('/', function () {
  return view('index');
});
*/

Route::get('', [IndexController::class, 'index']);

Route::resource("/anggota", AnggotaController::class)->middleware(['auth']);
Route::get('anggota', [AnggotaController::class, 'index'])->name('anggota.search')->middleware(['auth']);

Route::get('/guest', function () {
    return view('guest.index');
});
Route::resource("/guest/anggota", AnggotaGuestController::class);
Route::get('guest/anggota', [AnggotaGuestController::class, 'index'])->name('guest.search');
Route::resource("/guest/blog", BlogGuestController::class);
Route::resource("/guest/galeri", GaleriGuestController::class);

Route::resource("/blog", BlogController::class)->middleware(['auth']);

Route::resource("/galeri", GaleriController::class)->middleware(['auth']);
Route::resource("/carousels", CarouselsController::class)->middleware(['auth']);
Route::post('/submit-form', [IndexController::class, 'submitForm'])->name('submitForm');





Auth::routes([
    'register' => true, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/superadmin', [SuperAdminController::class, 'index']);

// struktur organisasi
Route::resource("/about/pengurus", PengurusController::class)->middleware(['auth']);
Route::get('/about/pengurus/create', [PengurusController::class, 'create'])->name('about.create')->middleware(['auth']);
Route::get('/about', function () {
    return view('about.index');
});
Route::get('/about/struktur', function () {
    return view('about.struktur');
});

Route::get('/about/rohis', function () {
    $rohis = App\Models\Pengurus::where('struktur_organisasi', 'kerohanian')->get();
    return view('about.rohis', ['rohis' => $rohis]);
});
Route::get('/about/kesek', function () {
    $kesekretariatan = App\Models\Pengurus::where('struktur_organisasi', 'Kesekretariatan')->get();
    return view('about.kesek', ['kesekretariatan' => $kesekretariatan]);
});
Route::get('/about/akademik', function () {
    $akademik = App\Models\Pengurus::where('struktur_organisasi', 'AkademikDanKemahasiswaan')->get();
    return view('about.akademik', ['akademik' => $akademik]);
});
Route::get('/about/pengaderan', function () {
    $pengaderan = App\Models\Pengurus::where('struktur_organisasi', 'pengaderan')->get();
    return view('about.pengaderan', ['pengaderan' => $pengaderan]);
});
Route::get('/about/miba', function () {
    $miba = App\Models\Pengurus::where('struktur_organisasi', 'MinatDanBakat')->get();
    return view('about.miba', ['miba' => $miba]);
});
Route::get('/about/eksternal', function () {
    $eksternal = App\Models\Pengurus::where('struktur_organisasi', 'Eksternal')->get();
    return view('about.eksternal', ['eksternal' => $eksternal]);
});
Route::get('/about/inti', function () {
    $pengurusInti = App\Models\Pengurus::where('struktur_organisasi', 'inti')->get();
    return view('about.inti', ['pengurusInti' => $pengurusInti]);
});
Route::get('/about/dewan', function () {
    $dewan = App\Models\Pengurus::where('struktur_organisasi', 'dewan')->get();
    return view('about.dewan', ['dewan' => $dewan]);
});

Route::get('/kirimEmail', [kirimEmailController::class, 'index']);