<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/dbsave', function () {
    return view('dbsave');
});

Route::get('/login1', function () {
    return view('login1');
});

Route::get('/cusmenu', function () {
    return view('cusmenu');
});

Route::get('/food', function () {
    return view('food');
});

Route::get('/reservation_cus', function () {
    return view ('reservation_cus');
});

Route::get('/reservation_cus2', function () {
    return view ('reservation_cus2');
});

Route::get('/reservation_cus3', function () {
    return view ('reservation_cus3');
});

Route::get('/reservation_staff', function () {
    return view ('reservation_staff');
});

Route::get('/menulist', function () {
    return view ('menulist');
});

Route::get('/viewcart', function () {
    return view ('viewcart');
});

Route::get('/dashboard', function () {
    return view('dashboard');

    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
