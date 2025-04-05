<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\facades\file;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // .. this is how to insert multiple fake data
        for($i=0;$i<10;$i++){
            student::create([
                "name"=>fake()->name(),
                "email"=>fake()->unique()->email()
            ]);
        }


   //... this is how to insert single fake data using fake()
        // student::create([
        //     'name'=>fake()->name(),
        //     'email'=>fake()->unique()->email()
        // ]);




        
// ...it is json file data and we use only create because of timestamp 

    //     $json = File::get(path:"database/json/student.json");
    //     $students = collect(json_decode($json));

    // $students->each(function($stu){
    //     student::create([
    //         'name'=>$stu->name,
    //         'email'=>$stu->email
    //     ]);
    // });
    




//.... it is simple data using collection / collect ()
    // $students->each(function($stu_data){
    //     student::insert($stu_data);
    // });



    // ........it is simple data without json file

        // student::insert([
        //     'name'=>'ashok negiiiii',
        //     'email'=>'negiashok132@gmail.com'
        // ]);
    }
}
