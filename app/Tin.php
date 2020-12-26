<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tin extends Model
{
    
    protected $fillable = ['company_name', 'company_tin'];
}
