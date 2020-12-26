<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferReport extends Model
{
    protected $fillable = [
    	'fund_cluster',
    	'from_officer',
    	'to_officer',
    	'date',
    	'transfer_type',
    	'acquired_date',
    	'property_no',
    	'description',
    	'amount',
    	'ppe_condition',
    	'transfer_reason',
    	'signature',
    	'printed_name',
    	'designation',
    	'date',
}
