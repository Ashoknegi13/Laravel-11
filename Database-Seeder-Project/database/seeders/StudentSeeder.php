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
        $students = collect([
            [
                'name'=>'rahul negi',
                'email'=>'rahul@gmail.com'
            ],
            [
                'name'=>'Saurabh bisht',
                'email'=>'saurabhbisht@gmail.com'
            ],
            [
                'name'=>'vipin kaprawan',
                'email'=>'vipi@gmail.com'
            ],
            [
                'name'=>'Ashok negi',
                'email'=>'negiashok132@gmail.com'
            ]
]);

    $students->each(function($stu_data){
        student::insert($stu_data);
    });


        // student::create([
        //     'name'=>'ashok annnu negi',
        //     'email'=>'negiashok132@gmail.com'
        // ]);
    }
}
