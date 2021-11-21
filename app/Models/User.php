<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['id','full_name','birth_data','gender','education_degree',
    'merrige','address_registred','address_living','image','home_type','home_owning',
    'phone','phone_additional','target_adress'];

}
