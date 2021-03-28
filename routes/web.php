<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ReadingsController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
