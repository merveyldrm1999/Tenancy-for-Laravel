<?php

//declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    \App\Http\Middleware\AuthCheck::class,
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::get('/',[App\Http\Controllers\Tenant\BlogController::class,'index']);
    Route::post('/',[App\Http\Controllers\Tenant\BlogController::class,'store'])->name('blog');



    Route::get('/register',[App\Http\Controllers\Tenant\RegisterController::class,'index'])->name('register');
    Route::post('/register',[App\Http\Controllers\Tenant\RegisterController::class,'store'])->name('storeRegister');
});

