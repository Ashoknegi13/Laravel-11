<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    Public $timestamps = false;
protected $guarded = [];
   public function student(){
    return $this->belongsTo(Student::class);
  }
}
