<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;

    public function role(){
        return $this->belongsToMany(Role::class,'User_roles');
    }
}
