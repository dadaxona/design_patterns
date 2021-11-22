<?php

namespace App\Http\Controllers;
use App\Mail\Subscribe;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\OopRequest;
use App\Http\Requests\OopRequestUpdate;
use App\Providers\OOPService;
use Illuminate\Support\Facades\Http;

class OopController extends Controller
{ 
    public function index(OOPService $ilst)
    {
        return view('Oop.oop',['items'=>$ilst->get()]);
        // return response()->json(['items'=>$ilst->get()]);
        //  return response()->json(["items"=>Http::get('https://jsonplaceholder.typicode.com/users')->json()]);
    }

    public function create()
    {
        //
    }

    public function store(OopRequest $request, OOPService $ilst)
    {    
        // Mail::to($request->email)->queue(new Subscribe($request->name,$request->email,$request->password));
        return redirect()->route('oop.index',$ilst->create($request->validated()));    
    }

    public function show($id, OOPService $ilst)
    {
        return view('Oop.oopshow',['item'=>$ilst->show($id)]);
    }
  
    public function edit($id)
    {
        //
    }

    public function update(OopRequestUpdate $request, OOPService $ilst)
    {
        // Mail::to($request->email)->queue(new Subscribe($request->name,$request->email,$request->password));
        return redirect()->route('oop.index',$ilst->update($request->validated()));
    }

    public function destroy($id, OOPService $ilst)
    {
        return redirect()->route('oop.index',['item'=>$ilst->delete($id)]);
    }
}
