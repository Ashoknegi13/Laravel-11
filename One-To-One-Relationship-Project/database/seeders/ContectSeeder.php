<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contect;
use Illuminate\Support\Facades\File;


class ContectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:"database/json/contect.json");
        $data = collect(json_decode($json));
        $data->each(function($con){
            Contect::create([
                'email'=>$con->email,
                'phone'=>$con->phone,
                'address'=>$con->address,
                'city'=>$con->city,
                "student_id"=> $con->student_id
            ]);
        });
    }
}
