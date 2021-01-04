<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificationOfExpenses extends Model
{
    protected $fillable = [
    	'employee_name',
    	'employee_no',
    	'office',
    	'division',
    	'date',
    	'unit_amount'
];   	
}