<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\RoundRobinTransport;

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
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/categories', [CategoryController::class, 'index'])->name('category.all');
    // Route::get('/category/new', [CategoryController::class, 'create'])->name('category.new');
    // Route::get('/category/update/{id}', [CategoryController::class, 'edit'])->name('category.update');
    // Route::post('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    Route::resource('category', CategoryController::class);
});

require __DIR__.'/auth.php';
