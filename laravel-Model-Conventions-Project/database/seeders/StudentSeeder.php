<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

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
            student::create([

                'name'=> $stu->name,
                'age'=> $stu->age,
                'city'=> $stu->city
                // 'name'=> $stu->name,
            ]);
        });
    }
}
