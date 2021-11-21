<?php

namespace App\Providers;
use Illuminate\Support\Str;

class StopService
{
  
   
    protected $model;
    protected $client;
    protected $Clemtf;
    protected $dealse;
    protected $foreac;
   
    public function getlist(){
    return [
            "model"=>$this->model->all(),
            "client"=>$this->client->all(),            
            "Clemtf"=>$this->Clemtf->all(),
            "dealse"=>$this->dealse->all(),
            "foreac"=>$this->foreac->all(),
            ];
    }
    public function create($data)
    {
        return $this->model->create($data);
    }

    public function get($id)
    {        
       $edit=$this->model->findOrFail($id);
       return view('checkupdate',["item"=>$edit]);
    }

    public function update($data)
    {         
        $this->model->find($data['id'])->update($data);                
    }
   
    public function delete($id)
    {        
       $this->model->findOrFail($id)->delete();     
    }  
}
