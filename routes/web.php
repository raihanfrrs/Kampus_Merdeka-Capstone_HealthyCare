<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PasienController;
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

Route::controller(LayoutController::class)->group(function(){
    Route::get('/', function(){
        return redirect()->intended('dashboard');
    });
    Route::get('dashboard', 'index');
});

Route::controller(BeritaController::class)->group(function(){
    Route::get('berita', 'index');
});

Route::middleware('guest')->group(function(){
    Route::controller(LoginController::class)->group(function(){
        Route::get('login', 'index')->name('login');
        Route::post('login', 'store');
    });

    Route::controller(RegisterController::class)->group(function(){
        Route::get('register', 'index')->name('register');
        Route::post('register', 'store');
    });
});

Route::middleware('auth')->group(function(){
    Route::controller(LogoutController::class)->group(function(){
        Route::get('logout', 'logout')->name('logout');
    });
});

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['cekUserLogin:administrator']], function(){
        Route::resource('admin', AdminController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:patient']], function(){
        Route::resource('patient', PasienController::class);
        Route::resource('konsultasi', KonsultasiController::class);
    });
});