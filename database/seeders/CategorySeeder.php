<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Category::insert([
            ['name' => '3 Star Umrah Package'],
            ['name' => '4 Star Umrah Package'],
            ['name' => '5 Star Umrah Package']
        ]);
    }   
}
