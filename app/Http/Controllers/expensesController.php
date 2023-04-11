<?php

namespace App\Http\Controllers;

use App\Models\expenses;
use App\Models\Task;
use App\Models\Ticket;
use Illuminate\Http\Request;

class expensesController extends Controller
{
    public function index(){
        $expenses = expenses::all();
        return view ('expenses',compact('expenses'));
    }

    public function show($id){

        $expenses =expenses::find($id);
        return view('expenses',compact('expenses'));
    }

    public function create(){

        return view('create_expenses');
    }
    public function store(){
        $expenses =new expenses();
        $expenses->title= request()->titlename;
        $expenses->category= request()->itemcategory;
        $expenses->amount= request()->amount;
        $expenses->purchasedate= request()->purchasedate;

        $expenses->save();

        return redirect("/expenses");


    }

    public function delete($id) {
        $expenses = Task::find($id);
        $expenses->delete();
        return redirect()->back();
    }



}
