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
}
