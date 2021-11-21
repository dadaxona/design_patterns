<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Notification::paginate(10);
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
            'type' => 'required',
            'user_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'title' => 'required|max:100',
            'description' => 'nullable',
            
        ]);    

        $client = new Notification;
        $client -> type = $data['type'];
        $client -> user_id = $data['user_id'];
        $client -> category_id = $data['category_id'];
        $client -> title = $data['title'];
        $client -> description = $data['description'];
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
        $item = Notification::find($id);
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
            'type' => 'required',
            'user_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'title' => 'required|max:100',
            'description' => 'nullable',
            
        ]);  
        $client = Notification::find($request->id);
        $client -> type = $request -> type;
        $client -> user_id = $request -> user_id;
        $client -> category_id = $request -> category_id;
        $client -> title = $request -> title;
        $client -> description = $request -> description;
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
