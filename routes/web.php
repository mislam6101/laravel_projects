<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::middleware('guest:admin')->prefix('admin')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Auth\Admin\LoginController::class, 'store']);

    // Route::get('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'create'])->name('admin.register');
    // Route::post('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'store']);

});

Route::middleware('auth:admin')->prefix('admin')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Admin\LoginController::class, 'destroy'])->name('admin.logout');

    Route::view('dashboard','backend.admin_dashboard');

});


/////staff
Route::middleware('guest:staff')->prefix('staff')->group( function () {

    Route::get('login', [App\Http\Controllers\Auth\Staff\LoginController::class, 'create'])->name('staff.login');
    Route::post('login', [App\Http\Controllers\Auth\Staff\LoginController::class, 'store']);

    // Route::get('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'create'])->name('admin.register');
    // Route::post('register', [App\Http\Controllers\Auth\Admin\RegisterController::class, 'store']);

});

Route::middleware('auth:staff')->prefix('staff')->group( function () {

    Route::post('logout', [App\Http\Controllers\Auth\Staff\LoginController::class, 'destroy'])->name('staff.logout');

    Route::view('dashboard','backend.staff_dashboard');

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
    Route::resource('product', ProductController::class);
});

require __DIR__.'/auth.php';
