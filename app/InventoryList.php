<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryList extends Model
{
    protected $fillable = [
    	'item',
    	'property_no',
    	'ics_no',
    	'date_acquired'
    	'amount'
    	'property_no'
    	'transfer_to'
    	'status'
    	'location'
    	'remarks'
    	'date_acquired'
    	];
}
