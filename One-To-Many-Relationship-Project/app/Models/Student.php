<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
  Public $timestamps = false;

    public function book(){
        return $this->hasMany(Book::class);
    }
}
