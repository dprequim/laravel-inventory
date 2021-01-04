<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestForQuotation extends Model
{
    protected $fillable = [
    	'item_no',
    	'unit',
    	'item_desc',
    	'quantity',
    	'bid_price',
    	'unit_price',
    	'total_amount'
    	
];

}
