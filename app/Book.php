<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";

    public function scopeBookDetail($query, $bookID)
    {
        $query->where('id', $bookID);
    }
}
