<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    function login(Request $request)
    {
        $data= $request->input();
        $request->session()->put("user", $data["username"]);
        return redirect("account");
    }
}
