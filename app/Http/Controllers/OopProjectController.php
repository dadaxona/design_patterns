<?php

namespace App\Http\Controllers;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\OopRequest;
use App\Http\Requests\OopRequestUpdate;

class OopProjectController extends AbstractController
{ 
    public function index()
    {
        return $this->indexlesson();
    }

    public function create()
    {
        //
    }

    public function store(OopRequest $request)
    {
        return $this->storelesson($request);
    } 

    public function show($id)
    {
        return $this->showlesson($id);
    }
  
    public function edit($id)
    {
        //
    }

    public function update(OopRequestUpdate $request)
    {
        return $this->updatelesson($request);
    }

    public function destroy($id)
    {
        return $this->destroylesson($id);
    }
}
