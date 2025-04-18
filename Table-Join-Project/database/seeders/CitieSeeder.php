<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\citie;

class CitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $json = File::get(path:'database/json/cities.json')
      $citys = collect(json_decode($json));

      $citys->each(function($data){
                citie::insert([
            'id'=> $data->id,
            'city_name'=>$data->city_name
            ]);
      });
    }
}
