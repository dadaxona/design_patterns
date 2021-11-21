<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Order::paginate(10);
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
            'id' => 'sometimes',
            'client_id' => 'required',
            'total' => 'numeric|required',
            'status' => 'required',
            'product_ids' => 'sometimes|array'
            
        ]);    

        $client = new Order;
        $client -> client_id = $data['client_id'];
        $client -> total = $data['total'];
        $client -> status = $data['status'];
        $client -> product_ids = $data['product_ids'];
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
        $item = Order::find($id);
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
            'id' => 'sometimes',
            'client_id' => 'required',
            'total' => 'numeric|required',
            'status' => 'required',
            'product_ids' => 'sometimes|array'
            
        ]);  
        $client = Order::find($request->id);
        $client -> client_id = $request -> client_id;
        $client -> total = $request -> total;
        $client -> status = $request -> status;
        $client -> product_ids = $request -> product_ids;
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
