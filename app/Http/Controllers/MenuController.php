<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Aoptions;
use App\Models\FoodOrderNo;
use App\Models\Menu;
use App\Models\tempOrder;
use App\Models\Topping;
use App\Models\Toptions;
use Illuminate\Http\Request;
use DB;

use function Laravel\Prompts\alert;

class MenuController extends Controller
{
    public function save(Request $request)
    {
        $id= $request->input("id");
        $foodname = $request->input('foodname');
        $description = $request->input('description');
        $price = $request->input('foodprice');
        $categories= $request->input('categories');
        $url = $request->file('my_image')->getClientOriginalName();
        $request->file('my_image')->storeAs('public/image/', $url);
        $menu = new Menu();
        $menu->foodid = $id;
        $menu->foodname = $foodname;
        $menu->description = $description;
        $menu->price = $price;
        $menu->categories = $categories;
        $menu->image_url = $url;
        $menu->save();

        $toppinglist = $request->input("topping");

        $counter = 1;
        $counter2 = 1;
        $latestToppingId = null;
        if($toppinglist)
        foreach($toppinglist as $toppinglist){
            $topping = new Topping();
            $topping->foodid = $id;
            $topping->title = $toppinglist;
            $topping->save();

            if($counter2==1){
                $latestTopping = Topping::latest()->first();
                $latestToppingId = $latestTopping->id;
                $counter2++;
            }
            else{
                $latestToppingId++;
            }

            $stringChoice = "choicetopping".strval($counter);
            $choicelist = $request->input($stringChoice);
            foreach($choicelist as$choicelist){
                $choice = new Toptions();
                $choice->option = $choicelist;
                $choice->topping_id = $latestToppingId;
                $choice->save();
            }
            $counter++;
        }

        //Addon (not topping)
        $addonlist = $request->input("addon");
        $c1 = 1;
        $c2 = 1;
        $latestToppingId = null;
        if($addonlist)
        foreach($addonlist as $addonlist){
            $topping = new Addon();
            $topping->foodid = $id;
            $topping->title = $addonlist;
            $topping->save();

            if($c2==1){
                $latestTopping = Addon::latest()->first();
                $latestToppingId = $latestTopping->id;
                $c2++;
            }
            else{
                $latestToppingId++;
            }

            $stringChoice = "choiceaddon".strval($c1);
            $stringPrice = "priceaddon".strval($c1);
            $choicelist = $request->input($stringChoice);
            $pricelist = $request->input($stringPrice);
            foreach($choicelist as $choicelist){
                $choice = new Aoptions();
                $choice->option = $choicelist;
                $choice->addon_id = $latestToppingId;
                
                $choice->price = $pricelist[$choicelist-1];
                
                $choice->save();
            }
            $c1++;
        }

        return redirect()->back();        
    }

    public function index(Request $request){
        $id= $request->input("id");
        $food = Menu::where('foodid', $id)->first();
        $topping = Topping::where('foodid', $food->foodid)->get();
        $addon = Addon::where('foodid', $food->foodid)->get();
        if ($food) {
            return view('food', compact('food', 'topping', 'addon'));
        } else {
            // Handle the case where the record with the given ID was not found
            return response()->view('error', ['message' => 'Record not found'], 404);
        }
    }

    public function getTempOrder(Request $request){
        $count = 1;
        $radiostr = "radio" . $count;
        $latestfoodid = tempOrder::max('food_no');
        if($latestfoodid){
            $latestfoodid = $latestfoodid+1;
        }else{
            $latestfoodid = 1;
        }

        $food_no = new FoodOrderNo(); //change to take the largest number
        $food_no->id = $latestfoodid;
        $food_no->table_no = session('table');
        $food_no->quantity = $request->input("quantity");
        $requestinput = $request->input("request");
        if($requestinput)
            $food_no->request = $requestinput;
        else
            $food_no->request = null;

        $food_no->save();

        while ($request->has($radiostr)) {
            $id = $request->input($radiostr);
            $tempOrder = new tempOrder();
            $tempOrder->choice_no = $id;
            $tempOrder->top_or_add = "topping";
            $tempOrder->food_no= $latestfoodid;
            $tempOrder->save();

            $count++;
            $radiostr = "radio" . $count;
        }

        $count = 1;
        $checkstr = "checkbox".$count;
        while($request->has($checkstr))
        {
            foreach($request->input($checkstr) as $checkbox){
                $tempOrder = new tempOrder();
                $tempOrder->choice_no = $checkbox;
                $tempOrder->top_or_add = "addon";
                $tempOrder->food_no = $latestfoodid;
                $tempOrder->save();
            }
            $count++;
            $checkstr = "checkbox".$count;
        }
        $table = session('table');

        return redirect("/?table=$table");
    }

    public function cart(){
        $table = session('table');
        $food = FoodOrderNo::where('table_no', $table)->get();
            
        
        return view('cart', compact('food'));
        
    }
    public function addminus(Request $request){
        $action = $request->input("action");
        $foodItemId = explode('_', $action)[1];
        $action = explode('_', $action)[0];
        if($action== "add")
        {
            $adjustfood = FoodOrderNo::where('id', $foodItemId)->first();
            if ($adjustfood->quantity >= 10) {
                echo '<script>alert("Error: Quantity limit reached!");</script>';
            } else {
                // Increase the quantity by 1
                $adjustfood->quantity = $adjustfood->quantity + 1;
            }
            $adjustfood->save();
            return redirect()->back();
        }else if ($action=="minus"){
            $adjustfood = FoodOrderNo::where('id', $foodItemId)->first();
            if ($adjustfood->quantity <= 1) {
                #no doing anything
            } else {
                // Decrease the quantity by 1
                $adjustfood->quantity = $adjustfood->quantity -1;
            }
            $adjustfood->save();
            return redirect()->back();
        }else if($action=="delete"){
            $deletefood = FoodOrderNo::where('id', $foodItemId)->first();
            $deletetemp = tempOrder::where('food_no', $deletefood->id)->delete();
            $deletefood->delete();
            return redirect()->back();
        }else if($action == "edit"){
            $editfood = FoodOrderNo::where('id', $foodItemId)->first();
            $temporder = DB::table('temp_orders')
                    ->where('food_no', '=', $editfood->id)
                    ->first();

                    if($temporder->top_or_add == "topping"){
                        $var = DB::table('toptions')
                        ->where('id', '=', $temporder->choice_no) 
                        ->first();
                        $var2 = DB::table('toppings')
                        ->where('id', '=', $var->topping_id) 
                        ->first();
                        $var3 = DB::table('menus')
                        ->where('foodid', '=', $var2->foodid) 
                        ->first();
                    }else{
                        $var = DB::table('aoptions')
                        ->where('id', '=', $temporder->choice_no) 
                        ->first();
                        $var2 = DB::table('addons')
                        ->where('id', '=', $var->addon_id) 
                        ->first();
                        $var3 = DB::table('menus')
                        ->where('foodid', '=', $var2->foodid) 
                        ->first();
                    }
            $id = $var3->foodid;
            $food = Menu::where('foodid', $id)->first();
            $topping = Topping::where('foodid', $food->foodid)->get();
            $addon = Addon::where('foodid', $food->foodid)->get();
            $temporder = DB::table('temp_orders')
                    ->where('food_no', '=', $editfood->id)
                    ->get();   
            #return redirect("tofood?id={$var3->foodid}&edit_id={$editfood->id}");
            return view("foodedit", compact('food', 'topping', 'addon', 'temporder'));
        }
    }

    public function cusedit(Request $request){
        $action = $request->input("selectedno");
        $foodItemId = explode('_', $action)[1];
        $editfood = FoodOrderNo::where('id', $foodItemId)->first();
        $editfood->quantity = $request->input("quantity");
        $requestinput = $request->input("request");
        if($requestinput)
            $editfood->request = $requestinput;
        else
            $editfood->request = null;
        $editfood->save();
        $deletefood = tempOrder::where('food_no', $foodItemId)->delete();
        $count = 1;
        $radiostr = "radio" . $count;
        while ($request->has($radiostr)) {
            $id = $request->input($radiostr);
            $tempOrder = new tempOrder();
            $tempOrder->choice_no = $id;
            $tempOrder->top_or_add = "topping";
            $tempOrder->food_no= $foodItemId;
            $tempOrder->save();

            $count++;
            $radiostr = "radio" . $count;
        }

        $count = 1;
        $checkstr = "checkbox".$count;
        while($request->has($checkstr))
        {
            foreach($request->input($checkstr) as $checkbox){
                $tempOrder = new tempOrder();
                $tempOrder->choice_no = $checkbox;
                $tempOrder->top_or_add = "addon";
                $tempOrder->food_no = $foodItemId;
                $tempOrder->save();
            }
            $count++;
            $checkstr = "checkbox".$count;
        }
        return redirect("addcart");
    }
}
