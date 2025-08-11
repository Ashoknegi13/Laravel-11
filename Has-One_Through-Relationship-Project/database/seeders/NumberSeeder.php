<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone_number;
use Illuminate\Support\Facades\File;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:'database/json/number.json');
        $num = collect(json_decode($json));

        $num->each(function($data){
            Phone_number::Create([
                'numbers'=>$data->number,
                'industrie_id'=>$data->c_id
            ]);
        });
    }
}
