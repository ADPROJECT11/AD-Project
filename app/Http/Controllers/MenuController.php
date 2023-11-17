<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function save(Request $request)
    {
        $id= $request->input("id");
        $foodname = $request->input('foodname');
        $description = $request->input('description');
        $price = $request->input('price');
        $categories= $request->input('categories');
        $url = $request->file('my_image')->getClientOriginalName();
        $request->file('my_image')->storeAs('public/image/', $url);
        $menu = new Menu();
        $menu->id = $id;
        $menu->foodname = $foodname;
        $menu->description = $description;
        $menu->price = $price;
        $menu->categories = $categories;
        $menu->image_url = $url;
        $menu->save();
        return redirect()->back();        
    }
}
