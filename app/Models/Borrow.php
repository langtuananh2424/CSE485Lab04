<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Reader;

class Borrow extends Model
{
    // Find all information about the book
    public function book() {
        return $this->belongsTo(Book::class);
    }
    // Find all information about the reader
    public function reader() {
        return $this->belongsTo(Reader::class);
    }
}
