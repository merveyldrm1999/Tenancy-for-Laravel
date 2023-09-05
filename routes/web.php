<?php

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

//** Login routed started */
Route::post('/login',[App\Http\Controllers\LoginController::class,'authenticate'])->name('authenticate');
Route::get('/login',[App\Http\Controllers\LoginController::class,'index'])->name('login');

//** Register routed started */
Route::get('register',[App\Http\Controllers\RegisterController::class,'index'])->name('register');
Route::post('register',[App\Http\Controllers\RegisterController::class,'store'])->name('registerPost');

