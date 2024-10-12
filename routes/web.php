<?php

use App\Http\Controllers\Auth\AuthRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')
    ->group(function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'login']);

        Route::get('/register', [AuthRegisterController::class, 'index'])->name('register');
        Route::post('/register', [AuthRegisterController::class, 'register']);
    });

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::get('/logout', LogoutController::class)->name('logout');

    Route::controller(LinkController::class)->group(function () {
        Route::get('/links/create', 'create')->name('links.create');
        Route::post('/links/create', 'store');

        Route::middleware('can:modify,link')->group(function () {
            Route::get('/links/{link}/edit', 'edit')->name('links.edit');
            Route::put('/links/{link}/edit', 'update');

            Route::delete('/links/{link}', 'destroy')->name('links.destroy');

            Route::patch('/links/{link}/down', 'down')->name('links.down');
            Route::patch('/links/{link}/up', 'up')->name('links.up');
        });
    });
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
