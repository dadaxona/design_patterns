<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use App\Models\Clemtfamlimembers;

class clientfamiliymember extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
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
        $request->validate([
            'idy' => 'required',
            'full_name' => 'required',
            'relation_type' => 'required',
            'work' => 'required',
            'work_adress' => 'required',
            'income' => 'required',     
            
        ]);      
        $client = new Clemtfamlimembers;
        $client -> idy = $request['idy'];
        $client -> full_name = $request['full_name'];
        $client -> relation_type = $request['relation_type'];
        $client -> work = $request['work'];
        $client -> work_adress = $request['work_adress'];
        $client -> income = $request['income'];     
        $client->save();  
        $id = Client::where('id','=',$request['idy'])->first(); 
        return redirect()->route('clientf.edit', [$id]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Client::find($id);
        return view('clemtfamlimembers',['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $client = Clemtfamlimembers::find($id);
        $item = Client::find($id);
        return view('clemtfamlimembers',['item' => $item]);
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
            'idy'=>'required',
            'full_name' => 'required',
            'relation_type' => 'required',
            'work' => 'required',
            'work_adress' => 'required',
            'income' => 'required'        
        ]);  
        DB::table('clemtfamlimembers')->where('id',$request->id)->update([
            'idy'=>$request->idy,
            'full_name'=>$request->full_name,
            'relation_type'=>$request->relation_type,
            'work'=>$request->work,
            'work_adress'=>$request->work_adress,
            'income'=>$request->income           
        ]);  
        return redirect('/api/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Clemtfamlimembers::find($id);
        $client->delete();
        return redirect('/api/clients');
    }
}
