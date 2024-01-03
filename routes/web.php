<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PenggunaController;


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
Route::get('/login', function () {
    $data['page']= "Login";    
    return view('login',$data);
});



//Route Admin Area
Route::get('/user', [AdminController::class, 'index']);


//Pengguna
Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::post('/pengguna', [PenggunaController::class, 'store']);
Route::get('/pengguna/{id}', [PenggunaController::class, 'destroy']);
Route::get('/pengguna/detail/{id}', [PenggunaController::class, 'edit']);
Route::put('/pengguna/{id}', [PenggunaController::class, 'update']);





