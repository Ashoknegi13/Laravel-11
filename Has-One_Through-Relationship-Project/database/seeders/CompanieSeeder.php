<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Companie;
use Illuminate\Support\Facades\File;

class CompanieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/companie.json');
        $com = collect(json_decode($json));

        $com->each(function($data){
            Companie::create([
                    'name'=> $data->name,
                    'User_id'=>$data->user
            ]);
        });
    }
}
