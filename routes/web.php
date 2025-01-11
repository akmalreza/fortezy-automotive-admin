<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('admin');
Route::get('/user', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('user');
Route::get('/vehicle', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('vehicle');
Route::get('/news', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('news');
Route::get('/article', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('article');
Route::get('/blog', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('blog');
Route::get('/gallery', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('gallery');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('test', function () {
    return view('example-table');
});

Route::prefix('/car-and-bike-specs')
    ->controller(VehicleController::class)
    ->group(function () {
            Route::get('/detail', 'detail');
    });

require __DIR__.'/auth.php';
