<?php

namespace App\Http\Controllers;

use App\Interfaces\ClassInterface;
use App\Http\Requests\InterfaseRequest;

class InterfaseController extends Controller
{
   
    public function index(ClassInterface $postsRepo)
    {           
        return view('Interfaces.interfaces',['items'=>$postsRepo->get()]);
        // return response()->json(['items'=>$postsRepo->get()]);
    }   
  
    public function create()
    {
        //
    }

    public function store(InterfaseRequest $request ,ClassInterface $post)
    {    
        return redirect()->route('iter.index',$post->create($request->validated()));
    }

    public function show($id, ClassInterface $post)
    {
        return view('Interfaces.interfaceshow',['data'=>$post->show($id)]);
    }

    public function edit($id)
    {
        //
    }

    public function update(InterfaseRequest $request ,ClassInterface $post)
    {
        return redirect()->route('iter.index',$post->update($request->validated()));
    }

    public function destroy($id, ClassInterface $post)
    {            
        return redirect()->route('iter.index',$post->delete($id));
    }
}
 