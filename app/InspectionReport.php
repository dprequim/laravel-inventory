<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InspectionReport extends Model
{
    protected $fillable = [
    	'property_no',
    	'description',
    	'unit',
    	'quantity'
    	
}
