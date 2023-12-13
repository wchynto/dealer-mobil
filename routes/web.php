<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('mainpage.home');
})->name('home');

Route::get('/katalog', function () {
    return view('mainpage.katalog');
})->name('katalog');

Route::get('/about', function () {
    return view('mainpage.about');
})->name('about');

Route::group(
    [
        'as' => 'auth.',
    ],
    function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('loginProccess');
        Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
        Route::post('/register', [AuthController::class, 'register'])->name('registerProccess');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    }
);

Route::group(
    [
        'as' => 'dashboard.',
        'prefix' => 'dashboard',
        'middleware' => ['auth'],
    ],
    function () {
        Route::get('/', function () {
            return view('dashboard.dashboard');
        })->name('dashboard');
    }
);
