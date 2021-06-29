<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AprStockOut extends Model
{
    //
    protected $fillable = [
        'apr_id',
        'department',
        'stock_out',
        'date'
    ];

    public function Apr(){
        return $this->hasOne('App\Apr', 'id', 'apr_id');
    }
}
