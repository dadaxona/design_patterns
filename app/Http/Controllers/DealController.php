<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deal;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::paginate(2);
        return view('Dels.praduct',['a'=>$client]);
        // return response()->json(['items' => $client]);
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
            'idy' => 'required',
            'payment_term' => 'required',
            'mani_famliy_expene' => 'required',
            'created_by' => 'required',
            'created_at' => 'required',
            'created_by_conclusion' => 'required',
            'monitored_by' => 'required',
            'monitored_at' => 'required',
            'committee_member' => 'required',
            'committee_conslusion' => 'required',
            'committee_date' => 'required'
            
        ]);    

        $client = new Deal;
        $client -> idy = $data['idy'];
        $client -> payment_term = $data['payment_term'];
        $client -> mani_famliy_expene = $data['mani_famliy_expene'];
        $client -> created_by = $data['created_by'];
        $client -> created_at = $data['created_at'];
        $client -> created_by_conclusion = $data['created_by_conclusion'];
        $client -> monitored_by = $data['monitored_by'];
        $client -> monitored_at = $data['monitored_at'];
        $client -> committee_member = $data['committee_member'];
        $client -> committee_conslusion = $data['committee_conslusion'];
        $client -> committee_date = $data['committee_date'];
        $client->save();
        $id = Client::where('id','=',$data['idy'])->first();       
        return redirect()->route('deals.show', [$id]);
     
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
        $item = Client::find($id);
        return view('Dels.praductkiritish',['a'=>$item]);
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
        
        $item=DB::table('deals')->where('idy','LIKE','%'.$id.'%')->paginate(10);      
        return view('Dels.delsedit',['a'=>$item]);
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
            'idy' => 'required',
            'payment_term' => 'required',
            'mani_famliy_expene' => 'required',
            'created_by' => 'required',
            'created_at' => 'required',
            'created_by_conclusion' => 'required',
            'monitored_by' => 'required',
            'monitored_at' => 'required',
            'committee_member' => 'required',
            'committee_conslusion' => 'required',
            'committee_date' => 'required'
            
        ]);    
        DB::table('deals')->where('id',$request->id)->update([
            'idy' => $request->idy,
            'payment_term' => $request->payment_term,
            'mani_famliy_expene' => $request->mani_famliy_expene,
            'created_by' => $request->created_by,
            'created_at' => $request->created_at,
            'created_by_conclusion' => $request->created_by_conclusion,
            'monitored_by' => $request->monitored_by,
            'monitored_at' => $request->monitored_at,
            'committee_member' => $request->committee_member,
            'committee_conslusion' => $request->committee_conslusion,
            'committee_date' => $request->committee_date    
        ]);             
        return redirect()->route('deals.index');       
      
        // return response()->json(['item' => $client]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Deal::find($id);
        $client->delete();      
        return redirect('/api/deals');
    }
}
