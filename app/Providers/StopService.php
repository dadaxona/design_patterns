<?php

namespace App\Providers;
use Illuminate\Support\Str;

class StopService
{
    protected $model;
    public function getlist($config)
    {       
        return $this->model->select($config['columns'])->with($config['relations'])->paginate(20);            
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
