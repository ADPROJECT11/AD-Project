<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    function addexpense(Request $request){
        $subject = $request->input('subject');
        $expense = $request->input('expense');
        $categories= $request->input('categories');
        $description = $request->input('description');
        
        $addexpense = new Expense();
        $addexpense->subject = $subject;
        $addexpense->expense = $expense;
        $addexpense->categories = $categories;
        $addexpense->description = $description;
        $addexpense->save();
        
        return redirect('expense');
    }

    function details(Request $request){
        $id = $request->input('id');
        $expense = Expense::where('id', $id)->first();
        return view('expensedetails', compact('expense'));
    }

    function delete(Request $request){
        $id=$request->input('id');
        $delete = Expense::find($id)->delete();
        return redirect('expense');
    }
}
