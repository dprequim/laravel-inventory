<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apr extends Model
{
    protected $fillable = [
    	'item_no',
    	'item_desc',
    	'quantity',
    	'unit',
    	'unit_price'
 	];
}
