<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BidsAndAwards extends Model
{
    protected $fillable = [
    	'item_no',
    	'quantity',
    	'unit',
    	'parriculars',
    	'budget_cost',
    	'remarks'
}
