<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "my_table";
    protected $primaryKey = "student_id";

     const CREATED_AT = "Cretaion_date";
     const UPDATED_AT = "Updation_date";
    
}
 