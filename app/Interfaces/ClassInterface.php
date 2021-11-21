<?php
namespace App\Interfaces;

use App\Models\Test;

class ClassInterface implements GlobalInterface
{ 
    protected $model;
    public function __construct(Test $model) {
        return $this->model = $model;
    }

    // GlobalInterface function
    public function get() {
        return $this->model->get();
    }

    public function create($request) {
        return $this->model->create($request);
    } 

    public function show($id) {
        return $this->model->findOrFail($id);
    }
    
    public function edit($id) {
        return $this->model->find($id);
    }    
    
    public function update($request) {
        return $this->model->find($request['id'])->update($request);
    } 

    public function delete($id) {    
        return $this->model->find($id)->delete($id);
    }
    

}