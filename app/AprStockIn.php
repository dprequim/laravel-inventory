<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AprStockIn extends Model
{
    //
    protected $fillable = [
        'apr_id',
        'department',
        'stock_in',
        'date'
    ];

    public function Apr(){
        return $this->HasOne('App\Apr', 'id', 'apr_id');
    }
}
