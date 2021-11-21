<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [ 'id','name','spouse','spouse_work','children_count','famliy_member_count','income_generators_count','pasport_series'];
   
}
