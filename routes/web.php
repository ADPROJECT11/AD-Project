<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
function test($path){
    if(Session::has("username")){
        if(session('roles') == "admin"){
            $adminpath = array('dashboard', 'account', 'createuser', 'adminmenu', 'addmenu');
            foreach($adminpath as $adminpath)
            {
                if($adminpath == $path)
                {
                    return view($path);
                }
            }
            return redirect('dashboard');
        }else if(session('roles') == "staff"){
            $staffpath = array('reservation_staff', 'orderlist',);
            foreach($staffpath as $staffpath)
            {
                if($staffpath == $path)
                {
                    return view($path);
                }
            }
            return redirect('reservation_staff');
        }
        
    }
    else{
        return redirect('login');
    }
}

Route::get('login', function () {
    if(Session::has('username')){
        if(session("roles") == "admin")
            return redirect('dashboard');
        else if(session("roles") == "staff")
            return redirect('reservation_staff');
        else if(session("roles") == "chef");
            return redirect('dashboard');
    }    
    return view('login');
});

Route::get('/logout', function () {
    Session::flush();
    return redirect('login');
});

//Customer (Not Need User Level) need table session
Route::get('/', function () {
    
    $table = $_GET['table'];
    if(isset($table)){

    }else{
        return view("login");
    }
    Session::put('table', $table);
    return view('cusmenu');
});


Route::get('food', function () {
    return view('food');
});

Route::get('foodedit', function () {
    return view('foodedit');
});

Route::get('cart', function () {
    return view('cart');
});


//Admin
Route::get('dashboard', function () {
    return test("dashboard");
});

Route::get("account", function () {
    return test("account");
});

Route::get('createuser', function () {
    return view("createuser");
});

Route::get('adminmenu', function () {
    return test("adminmenu");
});

Route::get('addmenu', function () {
    return test("addmenu");
});

// Staff
Route::get('reservation_staff', function () {
    return test("reservation_staff");
});

Route::get('orderlist', function () {
    return test("orderlist");
});

//testing
Route::get('addmenu1', function () {
    return view("addmenu1");
});


Route::post('auth', [LoginController::class,'authenticate'] );
Route::post('register', [UserController::class,'register'] );
Route::post('delete', [UserController::class,'delete'] );
Route::post('menu', [MenuController::class,'save']);
Route::get('tofood', [MenuController::class,'index']);
Route::get('topping', [MenuController::class,'getTempOrder']);
Route::get('addcart', [MenuController::class,'cart']);
Route::get('addminus', [MenuController::class,'addminus']);
Route::get('cusedit', [MenuController::class,'cusedit']);