<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequisitionSlip extends Model
{
   protected $fillable = [
    	'requisition',
    	'stock_availability',
    	'issue',
    	'remarks',
    	'unit_price'
    ];
}
