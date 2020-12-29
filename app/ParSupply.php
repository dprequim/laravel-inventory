<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParSupply extends Model
{
    protected $fillable = [
    	'quantity',
    	'unit',
    	'description',
    	'property_no',
    	'date_aquired',
    	'amount'
    ];
}
