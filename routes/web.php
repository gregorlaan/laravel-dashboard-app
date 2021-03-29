<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\DashboardController;

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

Route::get('/readings', [ReadingController::class, 'index'])->name('readings.index');
Route::get('/readings/create', [ReadingController::class, 'create'])->name('readings.create');
Route::post('/readings', [ReadingController::class, 'store'])->name('readings.store');
Route::get('/readings/{reading}', [ReadingController::class, 'show'])->name('readings.show');
Route::get('/readings/{reading}/edit', [ReadingController::class, 'edit'])->name('readings.edit');
Route::patch('/readings/{reading}', [ReadingController::class, 'update'])->name('readings.update');

Route::get('/readers', [ReaderController::class, 'index'])->name('readers.index');
Route::get('/readers/create', [ReaderController::class, 'create'])->name('readers.create');
Route::post('/readers', [ReaderController::class, 'store'])->name('readers.store');
Route::get('/readers/{reader}', [ReaderController::class, 'show'])->name('readers.show');
Route::get('/readers/{reader}/edit', [ReaderController::class, 'edit'])->name('readers.edit');
Route::patch('/readers/{reader}', [ReaderController::class, 'update'])->name('readers.update');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');

require __DIR__.'/auth.php';
