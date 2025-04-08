<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\file;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/user.json');
        $users = collect(json_decode($json));

        $users->each(function($stu){
            User::create([
                'name'=>$stu->name,
                'email'=>$stu->email,
                'age'=>$stu->age,
                'city'=>$stu->city
            ]);
        });
    
    
        //     $users = collect(json_decode($json,true));             using array
        //    $users->each(function($stu){
       //     Student::create($stu);
       //    });
    


   }
}
