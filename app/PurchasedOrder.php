<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchasedOrder extends Model
{
    protected $fillable = [
    	'supplier',
    	'address',
    	'tin',
    	'po_no',
    	'date',
    	'property_no',
    	'unit',
    	'description',
    	'quantity',
    	'unit_cost',
    	'amount',
    	'fund_cluster',
    	'funds_available',
    	'burs_no',
    	'date_burs',
    	'ors_amount',
    ];
}
