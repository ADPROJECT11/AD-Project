<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function save(Request $request){
        $id= $request->input("id");
        $name= $request->input("name");
        $mobile= $request->input("mobile");
        $table= $request->input("table");
        $seats= $request->input("seats");
        $Reservation= new Reservation();
        $Reservation->id=$id;
        $Reservation->name=$name;
        $Reservation->mobile=$mobile;
        $Reservation->table=$table;
        $Reservation->seats=$seats;
        $Reservation->save();
        return redirect()->route('reservation_cus2');
    }
}
