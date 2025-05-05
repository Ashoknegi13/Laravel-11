<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Citie;
class CitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:"database/json/citie.json");
        $data = collect(json_decode($json));

        $data->each(function($stu){
             Citie::insert([
                "id"=> $stu->id,
                "city_name"=> $stu->city_name
            ]);
        });
    }
}
