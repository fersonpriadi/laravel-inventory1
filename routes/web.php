<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;

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
    return view('form-login');
});

Route::get('/login',[LoginController::class, 'index'])
->name('login')
->middleware('guest');

Route::get('/master',[MasterController::class, 'index'])
->name('master')
->middleware('auth');

Route::post('/login',[LoginController::class, 'authenticate'])
->name('kirim-data-login');

Route::get('/dashboard',[DashboardController::class, 'index']);
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
