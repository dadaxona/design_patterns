<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
class Check extends Model
{
    use HasFactory;
    protected $fillable=['id','name','email','password','clemtfamlimembers_id','check_id'];
    public function clent()
    {
        return $this->hasOne(Client::class);
    }
    public function clentf()
    {
        return $this->belongsTo(Clemtfamlimembers::class,'id');
    }
}