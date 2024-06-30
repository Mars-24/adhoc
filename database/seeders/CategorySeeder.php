<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            'title'=>"CONCEPTIONS GRAPHIQUES",
            'slug'=>"graphic-design",
        ]);
        DB::table('categories')->insert([
            'title'=>"CRÉATION DE SITES WEB",
            'slug'=>"web-design",
        ]);
        DB::table('categories')->insert([
            'title'=>"SHOOTING PHOTO",
            'slug'=>"mobile-app",
        ]);
    }
}
