<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaundryController;



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
    return view('homepage');
});


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

//Laundry
Route::get('/laundry', [LaundryController::class, 'index'])->middleware('auth');





