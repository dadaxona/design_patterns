<?php

namespace App\Providers;

use App\Providers\GlavniInterfazeServise;
use App\Models\Oop;
class OOPService extends GlavniInterfazeServise
{
   protected $lesson;

   public function __construct(Oop $oop)
   {
       $this->lesson=$oop;
   }
   
}
