<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Industrie;
use Illuminate\Support\Facades\File;

class IndustrieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/Industrie.json');
        $com = collect(json_decode($json));

        $com->each(function($data){
            Industrie::create([
                    'name'=> $data->name,
                    'User_id'=>$data->user
            ]);
        });
    }
}
