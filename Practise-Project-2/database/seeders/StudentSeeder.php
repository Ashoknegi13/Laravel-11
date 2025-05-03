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
        $json = File::get(path:"database/json/student.json");
        $datas = collect(json_decode($json));

        $datas->each(function($student){
            Student::insert([
                'name'=> $student->name,
                'email'=> $student->email,
                'age'=> $student->age,
                'city'=> $student->city
            ]);
        });
    }
}
