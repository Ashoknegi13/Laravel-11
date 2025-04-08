<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $json = File::get(path:'database/json/student.json');
       $stu = collect(json_decode($json));
       
       $stu->each(function($data){
            Student::create([
                'name'=>$data->name,
                'email'=>$data->email,
                'age'=>$data->age,
                'city'=>$data->city
            ]);
       });
       
    }
}
