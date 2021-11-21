<?php

namespace App\Providers;

use App\Providers\GlavniInterfazeServise;
use App\Models\OopProject;
class OOPServiceProject extends GlavniInterfazeServise
{
   protected $lesson;

   public function __construct(OopProject $oopproject)
   {
       $this->lesson=$oopproject;
   }

//    public function create($request)
//    {
//        $product_ids = $request['name'] ?? [];
//        unset($request['product_ids']);
//        $object = $this->lesson->create($request);
       
//        $object->client()->attach($product_ids);
       
//        return $object;
//    }
   
//    public function update($request)
//    {
//        $object = $this->lesson->find($request['id']);
       
//        $product_ids = $request['name'] ?? [];
//        unset($request['product_ids']);
       
//        $object->update($request);
       
//        $object->client()->sync($product_ids);
   
//        return $object;
//    }
}
