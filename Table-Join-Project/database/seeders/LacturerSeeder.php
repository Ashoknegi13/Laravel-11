<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\lacturer;
use Illuminate\Support\Facades\File;

class LacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:"database/json/lacturer.json");
        $data = collect(json_decode($json));

        $data->each(function($item){
            lacturer::insert([
                'name'=> $item->name,
                'email'=> $item->email,
                'age'=> $item->age,
                'city'=> $item->city
            ]);
        });
        
    }
}
