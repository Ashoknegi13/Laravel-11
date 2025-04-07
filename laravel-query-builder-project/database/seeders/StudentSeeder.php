<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
class StudentSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/student.json');
        $users = collect(json_decode($json));
    
        student::create([
            'name'=>$users->name,
            'email'=>$users->email,
            'age'=>$users->age,
            'city'=>$users->city
        ]);
    
    }
}
