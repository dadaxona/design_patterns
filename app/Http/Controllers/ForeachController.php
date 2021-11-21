<?php

namespace App\Http\Controllers;

use App\Http\Requests\ForeachRequest;
use App\Http\Requests\OopRequestUpdate;
use App\Providers\ForeachService;

class ForeachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ForeachService $foreach)
    {
        return view('Foreach.foreach',['items'=>$foreach->get()]);
        
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
    public function store(ForeachRequest $request, ForeachService $foreach)
    {       
        return redirect()->route('foreach.index',$foreach->create($request->validated())); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, ForeachService $foreach)
    {
        return view('Interfaces.interfaceshow',['data'=>$foreach->show($id)]);
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
    public function update(OopRequestUpdate $request, ForeachService $foreach)
    {
        return redirect()->route('iter.index',$foreach->update($request->validated()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,  ForeachService $foreach)
    {
        return redirect()->route('iter.index',$foreach->delete($id));
    }
}
