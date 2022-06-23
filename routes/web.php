<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AirplaneController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
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

Route::get('/dashboard-admin/', [AdminDashboardController::class, 'index'])->middleware('auth');
Route::get('/data-service/{airplane:slug}', [AdminDashboardController::class, 'show']);
Route::resource('/list-airplane', AirplaneController::class);
// Route::put('/list-airplane/{airplane:slug}/edit', [AirplaneController::class, 'edit']);
Route::resource('/list-items', ItemController::class);
Route::resource('/list-service', ServiceController::class);

Route::get('/dashboard-admin/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/dashboard-admin/login', [LoginController::class, 'store']);
Route::post('/dashboard-admin/logout', [LoginController::class, 'logout']);

Route::get('/dashboard-admin/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/dashboard-admin/register', [RegisterController::class, 'store']);
