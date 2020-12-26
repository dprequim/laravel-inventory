<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParSupply extends Model
{
    protected $fillable = [
    	'quantity',
    	'unit',
    	'discription',
    	'property_no',
    	'date_aquired',
    	'amount'
}
