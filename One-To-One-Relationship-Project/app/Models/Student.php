<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;

    public function contect(){
        return $this->hasOne(contect::class);
    }
}
