<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebuserController;
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

// Route::get('/users', [WebuserController::class, 'index'])->middleware(['auth', 'verified'])->name('users');
// Route::post('create-user', [WebuserController::class, 'createUser']);
// Route::get('add-user', [WebuserController::class, 'addEditUser']);

Route::prefix('users')->name('users.')->group(function () {
    Route::get('/users', [WebuserController::class, 'index'])->name('users');
    Route::get('add-user', [WebuserController::class, 'addUser'])->name('add');
    Route::get('edit-user/{id}', [WebuserController::class, 'editUser'])->name('edit');
    Route::post('save-user', [WebuserController::class, 'saveUser'])->name('save');
    Route::get('delete-user/{id}', [WebuserController::class, 'deleteUser'])->name('delete');
    
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
