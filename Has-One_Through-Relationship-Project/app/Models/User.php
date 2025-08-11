<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = False;

    public function IndustriePhoneNumber(){
        return $this->hasOneThrough(Phone_number::class,Industrie::class);
    }
}
