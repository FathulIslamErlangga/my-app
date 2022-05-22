<?php

use App\Http\Controllers\AirplaneController;
use App\Http\Controllers\DashboardAdminController;
use App\Models\Airplane;
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

Route::get('/', [DashboardAdminController::class, 'index']);
Route::resource('/list-airplane', AirplaneController::class);
