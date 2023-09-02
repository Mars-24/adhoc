<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('admins')->insert([
            [
                'fullname'=>'Adhoc Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('111111'),
            ],
        ]);

    }
}
