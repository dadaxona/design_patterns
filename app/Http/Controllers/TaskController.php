<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Task::paginate(10);
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
            'delivery_time' => 'required',
            'title' => 'required|max:50',
            'subtitle' => 'required|max:100',
            
        ]);    

        $client = new Task;
        $client -> name = $data['name'];
        $client -> delivery_time = $data['delivery_time'];
        $client -> title = $data['title'];
        $client -> subtitle = $data['subtitle'];
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
        $item = Task::find($id);
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
            'delivery_time' => 'required',
            'title' => 'required|max:50',
            'subtitle' => 'required|max:100',
            
        ]);  
        $client = Task::find($request->id);
        $client -> name = $request -> name;
        $client -> delivery_time = $request -> delivery_time;
        $client -> title = $request -> title;
        $client -> subtitle = $request -> subtitle;
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
