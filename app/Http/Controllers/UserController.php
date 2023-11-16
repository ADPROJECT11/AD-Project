<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function testRequest(Request $request)
    {
        return view("account");
    }

    function test(Request $request)
    {
        return view("testing1");
    }
}
