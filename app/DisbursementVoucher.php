<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DisbursementVoucher extends Model
{

    protected $fillable = [
    	'fund_cluster',
    	'employee_no',
    	'bur_no',
    	'address',
    	'date',
    	'particular',
    	'responsibility_center',
    	'mfo',
    	'amount',
    	'account_tittle',
    	'uacs_code',
    	'debit',
    	'credit',
    	'cash_available',
    	'authority_debt',
    	'support_document',
    	'approved_payment',
    	'check_no',
    	'check_date',
    	'accaount_no',
    	'signature',
    	'printed_name',
    	'jev_no',
];

}

