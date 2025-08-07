<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = False;

    public function CompanyPhoneNumber(){
        return $this->hasOneThrough(Phone_number::class,Companie::class,'company_id');
    }
}
