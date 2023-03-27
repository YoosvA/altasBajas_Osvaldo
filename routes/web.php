<?php

use App\Http\Controllers\Altasbajas;
use App\Http\Controllers\AltasyBajas;
use App\Models\Altabaja;
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

Route::get('/', [Altasbajas::class, 'index']);
Route::get('/altasbajas', [Altasbajas::class, 'altasbajas']);
Route::get('/create', [Altasbajas::class, 'create']);
Route::post('/store', [Altasbajas::class, 'store']);
Route::get('/edit/{id}', [Altasbajas::class, 'edit'])->name('edit');
Route::put('update/{id}', [Altasbajas::class, 'update'])->name('update');
Route::get('/show/{id}', [Altasbajas::class, 'show'])->name('show');
Route::delete('/destroy/{id}', [Altasbajas::class, 'destroy'])->name('destroy');