<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    
    public function user(){
        return $this->belongsToMany(User::class,'User_roles');
    }

}
