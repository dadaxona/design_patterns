<?php

namespace App\Providers;
use Illuminate\Support\Str;

class StopService
{
    protected $model;

    public function getlist(?array $config = null){
        $list = $this->model->query()->orderBy('id', 'desc');
              
        if($config){
            //columns
            $list = $list->select($config['columns']);
            //relations
            $list->with($config['relations']);
        }
        $collection_arr = $list->paginate(request()->get('limit', 15))->toArray();
        
        return $collection_arr;
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
