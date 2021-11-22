<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clemtfamlimembers extends Model
{
    use HasFactory;
    // protected $table='clemtfamlimembers';
    protected $fillable=['id','idy','full_name','relation_type','work','work_adress','income'];
    public $timestamps = false;
  
}
