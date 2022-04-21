<?php

use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function () {
    return view('index');
});

/**
 * Auth
 */
Route::prefix('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('auth.login.index');
    Route::post('/login', [LoginController::class, 'save'])->name('auth.login.save');
    Route::get('/register', [RegisterController::class, 'index'])->name('auth.register.index');
    Route::post('/register', [RegisterController::class, 'save'])->name('auth.register.save');
});

Route::prefix('admin')->group(function () {
    /**
     * Users
     */
    Route::prefix('users')->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('users.index');
        Route::post('/', [UsersController::class, 'create'])->name('users.create');
        Route::get('/{id}', [UsersController::class, 'read'])->name('users.read');
    });

    /**
     * Users roles
     */
    Route::prefix('roles')->group(function () {
        Route::get('/', [RolesController::class, 'index'])->name('roles.index');
        Route::post('/', [RolesController::class, 'create'])->name('roles.create');
        Route::get('/{id}', [RolesController::class, 'read'])->name('roles.read');
    });
});
