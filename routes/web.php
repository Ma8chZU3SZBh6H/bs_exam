<?php

use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('/login', [LoginController::class, 'store'])->middleware('guest')->name('login');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register');

Route::post('/company', [CompaniesController::class, 'store'])->middleware('auth')->name('company');
