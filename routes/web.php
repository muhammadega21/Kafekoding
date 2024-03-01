<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\TentangkamiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPage\LandingPageController;
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
//     return view('welcome');
// });

Route::get('/', [LandingPageController::class, 'index'])->name('/');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('registerProcces', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('register', 'loginProcces')->name('login.procces');
    Route::get('logout', 'logout')->name('logout');
});

Route::resources([
    'dashboard' => DashboardController::class,
    'hero' => HeroController::class,
    'tentangkami' => TentangkamiController::class,

]);
