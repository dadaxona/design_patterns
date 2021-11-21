<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
class Check extends Model
{
    use HasFactory;
    protected $fillable=['id','name','email','password'];
}
