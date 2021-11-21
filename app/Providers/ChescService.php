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
    protected $client;
    protected $Clemtf;
    protected $dealse;
    protected $foreac;


    public function __construct(Check $data, Client $client ,Clemtfamlimembers $Clemtfaml, Deal $deals, Forech $foreach)
    {
        $this->model = $data;
        $this->client = $client;
        $this->Clemtf = $Clemtfaml;
        $this->dealse = $deals;
        $this->foreac = $foreach;
   
    } 
  
  
}
