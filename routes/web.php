<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/admin', [Controller::class, 'admin'])->name('admin');
Route::group(['prefix' => 'dosen'],function(){
    Route::get('/', [Controller::class, 'dosenDashboard'])->name('dosen');
    Route::get('/dashboard', [Controller::class, 'dosenDashboard'])->name('dosenDashboard');
    Route::get('/proposalPenelitian', [Controller::class, 'dosenProposalPenelitian'])->name('dosenProposalPenelitian');
    Route::get('/review', [Controller::class, 'dosenReview'])->name('dosenReview');
    Route::get('/dokumenPendukung', [Controller::class,'dosenDokumenPendukung'])->name('dosenDokumenPendukung');
    Route::get('/ListProposalInternal', [Controller::class,'ListProposalInternal'])->name('ListProposalInternal');
    Route::get('/pengajuanAnggaran', [Controller::class,'pengajuanAnggaran'])->name('pengajuanAnggaran');
    Route::get('/pengajuanBuku', [Controller::class,'pengajuanBuku'])->name('pengajuanBuku');
    Route::get('/penelitianMandiri', [Controller::class,'dosenPenelitianMandiri'])->name('dosenPenelitianMandiri');
    Route::get('/pengajuanPembelian',[Controller::class,'dosenPengajuanPembelian'])->name('dosenPengajuanPembelian');
    Route::get('/laporanPemantauan',[Controller::class,'dosenLaporanPemantauan'])->name('dosenLaporanPemantauan');
});
Route::get('/', [Controller::class, 'home'])->name('home');