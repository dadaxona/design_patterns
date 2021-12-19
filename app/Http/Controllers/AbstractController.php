<?php

namespace App\Http\Controllers;
use App\Mail\Subscribe;
use Illuminate\Support\Facades\Mail;
use App\Providers\OOPServiceProject;

abstract class AbstractController
{
    private $list;
    public function __construct(protected OOPServiceProject $lists){
        $this->list=$lists;
    }

    public function indexlesson()
    {
        // return view('OppProject.ooppro',['items'=>$this->list->get()]);
        return response()->json(['items'=>$this->list->get()]);
    }

    public function create()
    {
        //
    }

    public function storelesson($request)
    {    
        // Mail::to($request->email)->queue(new Subscribe($request->name,$request->email,$request->password));
        return response()->json(['items'=>$this->list->create($request->validated())]); 
    } 

    public function showlesson($id)
    {
        return response()->json(['items'=>$this->list->show($id)]);
    }
  
    public function edit($id)
    {
        //
    }

    public function updatelesson($request)
    {
        // Mail::to($request->email)->queue(new Subscribe($request->name,$request->email,$request->password));
        return redirect()->route('oopproject.index',$this->list->update($request->validated()));
    }

    public function destroylesson($id)
    {
        return response()->json(['items'=>$this->list->delete($id)]);
    }
}
