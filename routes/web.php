<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

// Pangeran Jonathan | 6706223030 | D3 RPLA 46-03
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/koleksi', [CollectionController::class, 'index']);
    Route::get('/koleksiTambah', [CollectionController::class, 'create']);
    Route::post('/koleksiStore', [CollectionController::class, 'store']);
    Route::get('/koleksiView/{id}', [CollectionController::class, 'findOne']);
    
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/userRegistration', [UserController::class, 'registration']);
    Route::post('/userStore', [UserController::class, 'store']);
    Route::get('/userView/{id}', [UserController::class, 'findOne']);
});

require __DIR__.'/auth.php';
