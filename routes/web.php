<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('register');
//     //return view('login');
// });

Route::get('/login', [AuthController::class, 'Login'])->name('login');
Route::post('/loginProcess', [AuthController::class, 'LoginProcess'])->name('loginProcess');
Route::get('/register', [AuthController::class, 'Register'])->name('register');
Route::post('/registerProcess', [AuthController::class, 'RegisterProcess'])->name('registerProcess');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');
