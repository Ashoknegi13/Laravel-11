<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:"database/json/student.json");
        $users = collect(json_decode($json));

        $users->each(function($user){
            Student::create([
                'name'=>$user->name,
                'age'=>$user->age,
                'email'=>$user->email,
                'city'=>$user->city
            ]);
        });

    }
}
