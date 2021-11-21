<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Expense::paginate(10);
        return response()->json(['items' => $client]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name' => 'required|max:100',
            'amount' => 'required|numeric',
            'payment_time' => 'required|date',
        ]);    

        $client = new Expense;
        $client -> name = $data['name'];
        $client -> amount = $data['amount'];
        $client -> payment_time = $data['payment_time'];
        $client->save();
        
        return response()->json(['item' => $client]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Expense::find($id);
        return response()->json(['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'amount' => 'required|numeric',
            'payment_time' => 'required|date',
            
        ]);  
        $client = Expense::find($request->id);
        $client -> name = $request -> name;
        $client -> amount = $request -> amount;
        $client -> payment_time = $request -> payment_time;
        $client -> save();
        return response()->json(['item' => $client]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
