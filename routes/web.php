<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\DashboardKategoriController;
use App\Http\Controllers\DashboardPesananController;
use App\Models\kategori;
use App\Models\Daftarharga;
use App\Models\Pesanan;

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

//menampilkan halaman home
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home',
    ]);
});


//menampilkan halaman kategori bus
Route::get('/kategoribus', function () {
    return view('kategoribus', [
        "title" => "menu",
        "active" => 'menu',
        "bus" => kategori::all()
    ]);
});

//menampilkan halaman bus
Route::get('/kategoribus/{bus:slug}', function (kategori $bus) {
    return view('bus', [
        'title' => $bus->nama_menu,
        "active" => 'menu',
        'bus' => $bus,

    ]);
});


//menampilkan halaman daftar harga
Route::get('/daftarharga', function () {
    return view('daftarharga', [
        'title' => 'Daftar Harga',
        "active" => 'Daftar Harga',
        'harga' => daftarharga::all(),

    ]);
});


//menampilkan halaman pesanan
Route::get('/pesanan', function () {
    return view('pesanan', [
        'title' => 'Pesanan',
        "active" => 'Pesanan',
        'daftarharga' => Daftarharga::all(),

    ]);
});

Route::post('/pesanan', [PesananController::class, 'store'])->name('pesan.tiket');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource('/dashboard/kategoribus', DashboardKategoriController::class);
Route::get('/kategoribus/{id}/edit',[DashboarKategoriController::class,'edit']);
Route::get('/kategori/delete/{id}',[DashboardKategoriController::class,'delete']);

Route::resource('/dashboard/pesanan', DashboardPesananController::class);