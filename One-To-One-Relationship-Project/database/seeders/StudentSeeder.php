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
        $data = collect(json_decode($json));
        $data->each(function($stu){
            Student::create([
                'name'=> $stu->name,
                'age'=>$stu->age,
                'gender' => $stu->gender
            ]);    
        });
    }
}
