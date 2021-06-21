<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryChecklistTwo extends Model
{
    //
    protected $fillable = [
        'item',
        'property_no',
        'ics_no',
        'date_acquired',
        'amount',
        'property_owner',
        'transfer_to',
        'status',
        'location',
        'remarks',
    ];
}
