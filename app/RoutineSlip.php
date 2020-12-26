<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoutineSlip extends Model
{
    protected $fillable = [
    	'full_name',
    	'purpose',
    	'attachments',
    	'date_received',
    	'date_released'
 	];
}
