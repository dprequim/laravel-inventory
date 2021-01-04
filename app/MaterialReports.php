<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialReports extends Model
{
    protected $fillable = [
    	'fund_cluster',
    	'storage_place',
    	'date',
    	'items',
    	'quantity',
    	'unit',
    	'description',
    	'receipt_no',
    	'receipt_date',
    	'receipt_amount',
    ];
}
