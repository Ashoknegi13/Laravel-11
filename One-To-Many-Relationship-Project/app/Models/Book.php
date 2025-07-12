<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    Public $timestamps = false;
  public function student(){
    return $this->hasMany(Student::class);
  }
}
