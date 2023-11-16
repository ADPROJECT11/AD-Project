<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class PhotoController extends Controller
{
    public function create()
    {
        return view("testing");
    } 

    public function store(Request $request)
    {
        $size = $request->file('my_image')->getSize();
        $name = $request->file('my_image')->getClientOriginalName();
        $request->file('my_image')->storeAs('public/image/', $name);
        $image = new Image();
        $image->name = $name;
        $image->size = $size;
        $image->save();
        return redirect()->back();
    }
}
