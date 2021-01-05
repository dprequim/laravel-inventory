<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairInspection extends Model
{
    protected $fillable = [
    	'type',
    	'engine_no',
    	'acq_date',
    	'lastrepair_date',
    	'brand_name',
    	'property_no',
    	'acq_cost',
    	'last_repair',
    	'defects_complain',
    	'worktobedone',
    	'supplied_replaced',
    	'findings',
    	'pre_inspected',
    	'post_repair',
    	'repair_shop',
    	'joborder_no',
    	'joborder_date',
    	'invoice_no',
    	'po_no',
    	'po_date',
    	'amountjob_order',
    	'payable_amount',
    	'postrepair_finding',
    	'inspected_by',
    	'postrepair_date',
];
}
