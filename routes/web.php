<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MenuController;
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
    if(session()->has('user')){
        return redirect('account');
    }
    return view('login1');
});

Route::get('/cusmenu', function () {
    return view('cusmenu');
});

Route::get('/food', function () {
    return view('food');
});

Route::get('/viewcart', function () {
    return view('cart');
});

Route::get('/createuser', function () {
    return view ('createuser');
});

Route::get('/menulist', function () {
    return view ('menulist');
});

Route::get('/adminmenu', function () {
    return view('adminmenu');
});

Route::get('/account', function () {
    return view('account');
});

Route::get('/testing1', function () {
    return view('testing1');
});

Route::get('/addmenu', function () {
    return view('addmenu');
});



Route::get('account', [UserController::class,'testRequest']);
//Route::post('testing', [UserController::class,'test']);
Route::get('testing', [PhotoController::class, 'create']);
Route::post('testing', [PhotoController::class,'store']);
Route::post('loginn', [loginController::class,'login']);
Route::post('menu', [MenuController::class,'save']);


Route::get('logout', function () {
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('login1');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});
