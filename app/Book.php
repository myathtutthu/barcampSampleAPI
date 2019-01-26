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
    public function author()
    {
        return $this->belongsTo("App\Author");
    }
    public function category()
    {
        return $this->belongsTo("App\Category");
    }
    public function publisher()
    {
        return $this->belongsTo("App\Publisher");
    }
}
