<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function contect(){
        return $this->hasOne(Contect::class);
    }
}
