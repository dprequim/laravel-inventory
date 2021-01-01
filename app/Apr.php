<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
