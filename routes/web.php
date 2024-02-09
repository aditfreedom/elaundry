<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaundryController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TransaksiController;





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


//home
Route::get('/', [HomePageController::class, 'index']);
Route::get('/store', [HomePageController::class, 'laundry']);
Route::get('/store/product', [HomePageController::class, 'detail']);
Route::get('/purchase', [HomePageController::class, 'create'])->middleware('auth');
Route::post('/purchase', [HomePageController::class, 'confirm'])->middleware('auth');
Route::post('/order', [HomePageController::class, 'store'])->middleware('auth');
Route::get('/orderan', [HomePageController::class, 'orderan'])->middleware('auth');
Route::get('/invoice/{id}', [HomePageController::class, 'invoice'])->middleware('auth');










//route login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');




//Route Admin Area
Route::get('/user', [AdminController::class, 'index'])->middleware('auth');


//Pengguna
Route::get('/pengguna', [UserController::class, 'index'])->middleware('auth');
Route::post('/pengguna', [UserController::class, 'store'])->middleware('auth');
Route::get('/pengguna/{id}', [UserController::class, 'destroy'])->middleware('auth');
Route::get('/pengguna/detail/{id}', [UserController::class, 'edit'])->middleware('auth');
Route::put('/pengguna/{id}', [UserController::class, 'update'])->middleware('auth');
Route::put('/userProfile/{id}', [UserController::class, 'updateUser'])->middleware('auth');


//Laundry
Route::get('/laundry', [LaundryController::class, 'index'])->middleware('auth');
Route::get('/laundry/add', [LaundryController::class, 'create'])->middleware('auth');
Route::post('/laundry', [LaundryController::class, 'store'])->middleware('auth');
Route::get('/laundry/{id}', [LaundryController::class, 'destroy'])->middleware('auth');
Route::get('/laundry/detail/{id}', [LaundryController::class, 'edit'])->middleware('auth');
Route::put('/laundry/{id}', [LaundryController::class, 'update'])->middleware('auth');


//Laundry
Route::get('/paket', [PaketController::class, 'index'])->middleware('auth');
Route::get('/paket/add', [PaketController::class, 'create'])->middleware('auth');
Route::post('/paket', [PaketController::class, 'store'])->middleware('auth');
Route::get('/paket/{id}', [PaketController::class, 'destroy'])->middleware('auth');
Route::get('/paket/detail/{id}', [PaketController::class, 'edit'])->middleware('auth');
Route::put('/paket/{id}', [PaketController::class, 'update'])->middleware('auth');

//Transaksi
Route::get('/transaksi_baru', [TransaksiController::class, 'index'])->middleware('auth');
Route::get('/transaksi/add', [TransaksiController::class, 'create'])->middleware('auth');
Route::post('/transaksi', [TransaksiController::class, 'store'])->middleware('auth');
Route::get('/transaksi/{id}', [TransaksiController::class, 'destroy'])->middleware('auth');
Route::get('/transaksi/detail/{id}', [TransaksiController::class, 'edit'])->middleware('auth');
Route::put('/transaksi/{id}', [TransaksiController::class, 'update'])->middleware('auth');
Route::get('/transaksi_proses', [TransaksiController::class, 'proses'])->middleware('auth');
Route::get('/transaksi_proses/detail/{id}', [TransaksiController::class, 'editProses'])->middleware('auth');
Route::put('/transaksi_proses/{id}', [TransaksiController::class, 'updateProses'])->middleware('auth');
Route::get('/transaksi_selesai', [TransaksiController::class, 'selesai'])->middleware('auth');


//User Profile
Route::get('/profile', [HomePageController::class, 'profile'])->middleware('auth');







