<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/student.json');
        $student = collect(json_decode($json));

        $student->each(function($data){
            student::insert([
                'name'=>$data->name,
                'email'=>$data->email,
                'age'=>$data->age,
                'city'=>$data->city
            ]);
        });
    }
}
