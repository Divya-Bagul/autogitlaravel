<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\UserController;

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
})->middleware(['auth', 'verified','adminauth'])->name('dashboard');

Route::middleware('auth','adminauth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/userList', [UserController::class, 'index'])->name('userList');
Route::get('/user-delete/{id}', [UserController::class, 'delete'])->name('user.delete');


Route::get('/User', function () {
    return ' welcome USer';
})->name('User');
require __DIR__.'/auth.php';
