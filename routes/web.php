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
Route::get('/dosen', [Controller::class, 'dosenDashboard'])->name('dosen');
Route::get('/dosen/dashboard', [Controller::class, 'dosenDashboard'])->name('dosenDashboard');
Route::get('/dosen/proposalPenelitian', [Controller::class, 'dosenProposalPenelitian'])->name('dosenProposalPenelitian');
Route::get('/dosen/review', [Controller::class, 'dosenReview'])->name('dosenReview');
Route::get('/dosen/dokumenPendukung', [Controller::class,'dosenDokumenPendukung'])->name('dosenDokumenPendukung');
Route::get('/', [Controller::class, 'home'])->name('home');