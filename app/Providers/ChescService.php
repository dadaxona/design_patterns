<?php

namespace App\Providers;

use App\Models\Check;
use App\Models\Client;
use App\Models\Clemtfamlimembers;
use App\Models\Deal;
use App\Models\Forech;
use App\Providers\StopService;

class ChescService extends StopService
{
    protected $model;
    public function __construct(Check $data)
    {
        $this->model = $data;  
    }
}
