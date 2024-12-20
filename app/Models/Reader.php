<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Borrow;

class Reader extends Model
{
    // Find all the books borrowed by a reader.
    public function borrows() {
        return $this->hasMany(Borrow::class);
    }
}
