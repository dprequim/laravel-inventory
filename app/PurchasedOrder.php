<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class PurchasedOrder extends Model
{
    protected $fillable = [
    	'supplier',
    	'address',
    	'tin',
        'procurement',
        'gentlemen',
        'place_delivery',
        'date_delivery',
        'delivery_term',
        'payment_term',
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
