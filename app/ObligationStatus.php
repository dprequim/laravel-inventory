<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObligationStatus extends Model
{
    protected $fillable = [
    	'serial_no',
    	'date',
    	'fund_cluster',
    	'payee',
    	'office',
    	'address',
    	'responsibility_center',
    	'particulars',
    	'pap',
    	'object_code',
    	'amount',
    	'refer_date',
    	'refer_particulars',
    	'tra_no',
    	'amount',
    	'obligation',
    	'payable',
    	'payment',
    	'balance',
    ];
}
