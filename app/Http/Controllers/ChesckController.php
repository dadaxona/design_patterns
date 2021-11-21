<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Check;
use App\Models\Client;
use App\Providers\ChescService;

class ChesckController extends Controller
{
    public function __construct(protected ChescService $post){}
    public function index()
    {
        
        $client = $this->post->getList();
        return response()->json(["items"=>$client]);
        // $client=Check::paginate(20);
        // return view('Check',['items' => $client]);
    }
    // public function index()
    // {
    //     return $this->respons([
    //         Check::select()->get(),
    //         // Client::select()->get(),

    //     ]);
        
    //     $client = $this->post->list();  
    //         foreach($client as $rw2){
    //         return response()->json(['item'=>$rw2]);       
    //     }   
    //     $user=Check::all();
    //     return view('us',['items'=>$user]);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PostRequest $request)
    {
        $user=Check::create($request->validated());      
        return redirect()->route('chesk.index');

    }
    // public function create(PostRequest $request)
    // {
        
       
        
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        
        $data1 = $this->post->create($request->validated());
        return redirect()->route('chesk.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->post->get($id);
       
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
    public function update(PostRequest $request)
    {      
        $this->post->update($request->validated());
        return redirect()->route('chesk.index');      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $delete=$this->post->delete($id);
       return redirect()->route('chesk.index');
    }

}
