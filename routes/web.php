<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorsController;
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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/login', [LoginController::class, 'index'])->name('login');


// Admin routes
Route::middleware(['auth:admin'])->group(function () {
    // Define admin routes here
    //Route::get('/admin', 'AdminController')->name('admin.auth');
    Route::post('/admin', [AdminController::class, 'auth'])->name('admin.auth');
});

// Donor routes
Route::middleware(['auth:donor'])->group(function () {
    // Define donor routes here
    //Route::get('/donors', 'DonorsController')->name('donor.auth');
    Route::post('/donors', [DonorsController::class, 'auth'])->name('donors.auth');
});


Route::get('/admin', [AdminController::class, 'index']);