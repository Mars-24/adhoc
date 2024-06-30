<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('category_blogs')->insert([
            'name'=>"Design graphique",
            'slug'=>"graphic-design",
        ]);
        DB::table('category_blogs')->insert([
            'name'=>"Réseaux sociaux",
            'slug'=>"reseaux-sociaux",
        ]);
        DB::table('category_blogs')->insert([
            'name'=>"Développement web",
            'slug'=>"dévelopement-web",
        ]);
        DB::table('category_blogs')->insert([
            'name'=>"Inbound Marketing",
            'slug'=>"inbound-marketing",
        ]);
        DB::table('category_blogs')->insert([
            'name'=>"Shooting photo produits",
            'slug'=>"shooting-photo",
        ]);
        DB::table('category_blogs')->insert([
            'name'=>"Brand Management",
            'slug'=>"brand-management",
        ]);
    }
}
