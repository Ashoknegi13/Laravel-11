<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\file;
use App\Models\Users;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(path:"database/json/users.json");
        $users = collect(json_decode($json));
        $users->each(function($us){
            Users::insert([
                'name'=> $us->name,
                'age'=>$us->age,
                'email'=>$us->email,
                'city'=>$us->city
            ]);
        });
    }
}
