<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Borrow;

<<<<<<< HEAD
class Book extends Model {
   
=======
class Book extends Model
{
    // Used to find all borrowings of the book
    public function borrows() {
        return $this->hasMany(Borrow::class);
    }
>>>>>>> origin/main
}

