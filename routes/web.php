<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReadingsController;
use App\Http\Controllers\ReadersController;

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

Route::get('/readings', [ReadingsController::class, 'index'])->name('readings.index');
Route::get('/readings/create', [ReadingsController::class, 'create'])->name('readings.create');
Route::post('/readings', [ReadingsController::class, 'store'])->name('readings.store');
Route::get('/readings/{reading}', [ReadingsController::class, 'show'])->name('readings.show');
Route::get('/readings/{reading}/edit', [ReadingsController::class, 'edit'])->name('readings.edit');
Route::patch('/readings/{reading}', [ReadingsController::class, 'update'])->name('readings.update');

Route::get('/readers', [ReadersController::class, 'index'])->name('readers.index');
Route::get('/readers/create', [ReadersController::class, 'create'])->name('readers.create');
Route::post('/readers', [ReadersController::class, 'store'])->name('readers.store');
Route::get('/readers/{reader}', [ReadersController::class, 'show'])->name('readers.show');
Route::get('/readers/{reader}/edit', [ReadersController::class, 'edit'])->name('readers.edit');
Route::patch('/readers/{reader}', [ReadersController::class, 'update'])->name('readers.update');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
