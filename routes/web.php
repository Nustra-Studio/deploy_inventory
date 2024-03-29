<?php

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
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryCabangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});


Route::group(['prefix' => 'error'], function(){
    Route::get('404', function () { return view('pages.error.404'); });
    Route::get('500', function () { return view('pages.error.500'); });
});
    Route::resource('/barang', BarangController::class);
    // route resource category,cabang,supplier,distribusi,transaction
    Route::resource('/category', CategoryController::class);
    Route::resource('/categorycabang', CategoryCabangController::class);
    Route::resource('/cabang', CabangController::class);
    Route::resource('/supllier', SupplierController::class);
    Route::resource('/distribusi', DistribusiController::class);
    Route::resource('/transaction', TransactionController::class);
    // route get pembelian pengeluaran dari root transaction
    Route::get('/pembelian', [TransactionController::class, 'pembelian'])->name('transaction.pembelian');
    Route::get('/pengeluaran', [TransactionController::class, 'pengeluaran'])->name('transaction.pengeluaran');
    
    Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('pages.error.404');
})->where('page','.*');
