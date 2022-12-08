<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoryNewsController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\CategoryDiseaseController;

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

Route::controller(LayoutController::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(ContactController::class)->group(function(){
    Route::get('contact', 'index');
});

Route::controller(NewsController::class)->group(function(){
    Route::get('news/read', 'index');
    Route::get('news/read/{news}', 'show');
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
        Route::resource('patient', PatientController::class);
        Route::resource('news', NewsController::class);
        Route::resource('category-news', CategoryNewsController::class);
        Route::resource('category-disease', CategoryDiseaseController::class);

        Route::controller(ContactController::class)->group(function(){
            Route::get('contact/{contact}', 'show');
        });
    });

    Route::group(['middleware' => ['cekUserLogin:patient']], function(){
        Route::resource('consultation', ConsultationController::class);

        Route::controller(ContactController::class)->group(function(){
            Route::post('contact', 'store');
        });
    });
});