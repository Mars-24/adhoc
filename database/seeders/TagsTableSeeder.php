<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            'title'=>"Mission",
        ]);
        DB::table('tags')->insert([
            'title'=>"Strategie",
        ]);  DB::table('tags')->insert([
            'title'=>"Site Web",
        ]);  DB::table('tags')->insert([
            'title'=>"Brand",
        ]);  DB::table('tags')->insert([
            'title'=>"Business",
        ]);  DB::table('tags')->insert([
            'title'=>" Graphique",
        ]);  DB::table('tags')->insert([
            'title'=>" Web",
        ]);
    }
}
