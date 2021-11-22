<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Clemtfamlimembers;

use Illuminate\Support\Facades\DB;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::paginate(2);
        // return response()->json(['items' => $client]);
        return view('clent',['a' => $client]);
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
            'name' => 'required',
            'spouse' => 'required',
            'spouse_work' => 'required',
            'children_count' => 'required',
            'famliy_member_count' => 'required',
            'income_generators_count' => 'required',
            'pasport_series'=>'required',
            'check_id'=>'nullable'   
            
        ]);            
  
        $client = new Client;
        $client -> name = $data['name'];
        $client -> spouse = $data['spouse'];
        $client -> spouse_work = $data['spouse_work'];
        $client -> children_count = $data['children_count'];
        $client -> famliy_member_count = $data['famliy_member_count'];
        $client -> income_generators_count = $data['income_generators_count'];
        $client -> pasport_series = $data['pasport_series'];
        $client -> check_id = $data['check_id'];
        $client->save();  
        $id = Client::where('pasport_series','=',$data['pasport_series'])->first();       
        return redirect()->route('clientf.show', [$id]);
                  
       
       
        // return response()->json(['item' => $client]);
    }
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {     
        $contres=DB::table('clemtfamlimembers')->where('idy','LIKE','%'.$id.'%')->paginate(10);
        $b=DB::table('deals')->where('idy','LIKE','%'.$id.'%')->paginate(10);
        return view('malumot',['a'=>$contres], compact('b'));      
        // return response()->json(['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Client::find($id);
        return view('clentshow',['item' => $item]);
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
            'name' => 'required',
            'spouse' => 'required',
            'spouse_work' => 'required',
            'children_count' => 'required',
            'famliy_member_count' => 'required',
            'income_generators_count' => 'required',
           
            
        ]);  
        DB::table('clients')->where('id',$request->id)->update([
            'name'=>$request->name,
            'spouse'=>$request->spouse,
            'spouse_work'=>$request->spouse_work,
            'children_count'=>$request->children_count,
            'famliy_member_count'=>$request->famliy_member_count,
            'income_generators_count'=>$request->income_generators_count,
          
        ]);  
        return redirect('/api/clients');
        //return response()->json(['item' => $client]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();   
        $client =DB::table('clemtfamlimembers')->where('idy','LIKE','%'.$id.'%');        
        $client->delete();
        return redirect('/api/clients');
    }
}
