<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseRequest extends Model
{
    protected $fillable = [
    	'office_section',
    	'pr_no',
    	'center_code',
    	'date',
    	'property_no',
    	'item_desc',
    	'quantity',
    	'unit_cost',
    	'total_cost'
}
