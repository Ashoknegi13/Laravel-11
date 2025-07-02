<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $json = File::get(path:'database/json/book.json');
     $data = collect(json_decode($json));
        $data->each(function($var){
            Book::create([
                "book"=>$var->book,
                "book_details"=>$var->book_details,
               "student_id"=>$var->student_id
            ]);
        });

    }
}
