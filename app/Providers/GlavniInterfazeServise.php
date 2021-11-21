<?php

namespace App\Providers;
use App\Interfaces\GlobalInterface;
class GlavniInterfazeServise implements GlobalInterface
{
    protected $lesson;
    
    public function get()
    {        
       return  $this->lesson->get();      
    }

    public function create($request)
    {
        return $this->lesson->create($request);    
    }
    
    public function show($id)
    {
        return $this->lesson->find($id);
    }
    
    public function update($request)
    {        
        return $this->lesson->find($request['id'])->update($request);
    }

    public function delete($id)
    {    
        return $this->lesson->find($id)->delete($id);
    }
}
