<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustodianSlipSupply extends Model
{
    protected $fillable = [
    	'item_no',
    	'item_desc',
    	'quantity',
    	'unit_amount',
    	'unit_cost',
    	'total_cost',
    	'descprition',
    	'inventory_no',
    	'estimated_life'
    ];
}
