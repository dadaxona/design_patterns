<?php

namespace App\Providers;

use App\Providers\GlavniInterfazeServise;
use App\Models\Forech;
class ForeachService extends GlavniInterfazeServise
{
    protected $lesson;

    public function __construct(Forech $oop)
    {
        $this->lesson=$oop;
    }
    public function create($request){       
        return $this->lesson->create($request);       
    }
}
