<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Check;
use App\Models\Client;
use App\Providers\ChescService;

class ChesckController extends Controller
{
    private $config;

    public function __construct(protected ChescService $post){
        $this->config = [
            'list' => [
                'columns' => ['id', 'name','email','password','clemtfamlimembers_id','check_id'],
                'relations' => [ 'clent','clentf']
            ]
        ];
    }

    public function index()
    {
        $client = $this->post->getList($this->config['list']);
        return view("Check",["items"=>$client]);
        // return response()->json(["items"=>$client]);
  
    }

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
