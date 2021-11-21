<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    protected $fillable=['id','idy','payment_term','mani_famliy_expene',
    'created_by', 'created_at','created_by_conclusion','monitored_by',
    'monitored_at','committee_member','committee_conslusion','committee_date'];
    public $timestamps = false;
}
