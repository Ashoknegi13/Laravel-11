<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contect extends Model
{
    public $timestamps = false;

    public function student(){
        return $this->belongsTo(Student::class);
    }
}
