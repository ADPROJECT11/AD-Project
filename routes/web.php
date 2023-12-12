<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/testing', function () {
    return view('testing');
});

Route::get('/dbsave', function () {
    return view('dbsave');
});

Route::get('/login1', function () {
    return view('login1');
});

Route::get('/', function () {
    return view('cusmenu');
});

Route::get('/food', function () {
    return view('food');
});

Route::get('/viewcart', function () {
    return view('cart');
});

Route::get('/viewcart/history', function () {
    return view('carthistory');
});

Route::get('/phptest', function () {
    return view('cart1');
});

Route::get('/dbtest', function () {
    return view('phpdbcart');
});

Route::post('/posttest', function () {
    return view('dbtesting');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard/sales', function () {
    return view('sales');
});

Route::get('/dashboard/expense', function () {
    return view('expense');
});

Route::get('/dashboard/profit', function () {
    return view('profit');
});

Route::get('/orderlist', function () {
    return view('orderlist');
});

Route::get('/orderlist/preparing', function () {
    return view('preparing');
});

Route::get('/orderlist/completed', function () {
    return view('completed');
});

Route::get('/orderlist/edit', function () {
    return view('editorder');
});

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
