<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BooksOut extends Model
{
    //
    protected $fillable = [
        'book_id',
        'quantity',
    ];

    public function Book(){
        return $this->HasOne('App\Book', 'id', 'book_id');
    }
}
