<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UtilizationRequest extends Model
{
    protected $fillable = [
    	'serial_no',
    	'date',
    	'funcluster',
    	'responsibility_center',
    	'particulars',
    	'mfo',
    	'expenditures',
    	'amount',
    	'refer_date',
    	'refer_partocular',
    	'rtrai_no',
    	'utilization',
    	'payable',
    	'payment',
    	'balance',
    ];
}
