<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\MasterBarangController;
use App\Http\Controllers\MasterKategoryController;
use App\Http\Controllers\MasterGudangController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\LandingDatastokController;
use App\Http\Controllers\DeleteHistoryController;
use App\Http\Controllers\AddUserController;

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


Route::get('/master/barang/tambah',[MasterBarangController::class, 'create'])
->name('master-barang-tambah')
->middleware('auth');

Route::post('/master/barang/simpan',[MasterBarangController::class, 'store'])
->name('master-barang-simpan')
->middleware('auth');

Route::get('/master/barang/hapus/{id}', [MasterBarangController::class, 'destroy'])
->name('master-barang-hapus')
->where('id','[0-9]+')
->middleware('auth');

Route::get('/master/barang/detail/{id}', [MasterBarangController::class, 'show'])
->name('master-barang-detail')
->where('id','[0-9]+')
->middleware('auth');

Route::get('/master/barang/edit/{id}', [MasterBarangController::class, 'edit'])
->name('master-barang-edit')
->where('id','[0-9]+')
->middleware('auth');

Route::post('/master/barang/update/{id}',[MasterBarangController::class, 'update'])
->name('master-barang-update')
->where('id','[0-9]+')
->middleware('auth');

Route::get('/master/barang',[MasterBarangController::class, 'index'])
->name('master-barang')
->middleware('auth');

Route::get('/master/kategory',[MasterKategoryController::class, 'index'])
->name('master-kategory')
->middleware('auth');

Route::get('/master/kategory/tambah',[MasterKategoryController::class, 'create'])
->name('master-kategory-tambah')
->middleware('auth');

Route::get('/master/kategory/hapus/{id}',[MasterKategoryController::class, 'destroy'])
->name('master-kategory-hapus')
->middleware('auth');

Route::get('/master/kategory/detail/{id}',[MasterKategoryController::class, 'show'])
->name('master-kategory-detail')
->middleware('auth');

Route::post('/master/kategory/simpan',[MasterKategoryController::class, 'store'])
->name('master-kategory-simpan')
->middleware('auth');

Route::get('/master/kategory/edit/{id}',[MasterKategoryController::class, 'edit'])
->name('master-kategory-edit')
->middleware('auth');

Route::post('/master/kategory/update/{id}',[MasterKategoryController::class, 'update'])
->name('master-kategory-update')
->where('id','[0-9]+')
->middleware('auth');

// Route master gudang start

Route::get('/master/gudang',[MasterGudangController::class, 'index'])
->name('master-gudang')
->middleware('auth');

Route::get('/master/gudang/tambah',[MasterGudangController::class, 'create'])
->name('tambah-data-gudang')
->middleware('auth');
// Route master gudang start

// route fungsi maste stock

Route::get('/stok',[LandingDatastokController::class, 'index'])
->name('master-stok')
->middleware('auth');

Route::get('/stok-keluar',[StockController::class, 'proses_stok_keluar'])
->name('stok-keluar')
->middleware('auth');

Route::post('/stok-keluar',[StockController::class, 'button_stok_keluar'])
->name('proses-stok-keluar')
->middleware('auth');

Route::get('/stock',[StockController::class, 'index'])
->name('form-stock-barang')
->middleware('auth');

Route::post('/stock-in', [StockController::class, 'proses_stok_masuk'])
->name('stock-in')
->middleware('auth');

Route::get('/History-Delete',[DeleteHistoryController::class, 'index'])
->name('delete-history')
->middleware('auth');

Route::get('/update-item/{id}',[DeleteHistoryController::class, 'update'])
->name('update-item')
->where('id','[0-9]+')
->middleware('auth');


// route fungsi add user login start

Route::get('/add/new/user', [AddUserController::class, 'index'])
->name('add-user')
->middleware('auth');

Route::post('/proses/simpan/user', [AddUserController::class, 'store'])
->name('proses-simpan-user')
->middleware('auth');


// route fungsi add user login end





