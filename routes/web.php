<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationMasterController;
use App\Http\Controllers\ProjectMasterController;
use App\Http\Controllers\UserMasterController;
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
    return view('welcome');
});

Route::middleware('guest')->as('auth.')->group(function() {
    Route::get('login', [AuthController::class, 'loginView'])->name('loginView');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function() {
    Route::get('dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('users', UserMasterController::class);
    Route::resource('projects', ProjectMasterController::class);
    Route::get('notification', [NotificationMasterController::class, 'create'])->name('notification.create');
    Route::post('notification', [NotificationMasterController::class, 'store'])->name('notification.store');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});