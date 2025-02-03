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
                'email'=>'aagenceadhoc@ebusiness.tg',
                'password'=>Hash::make('6ccee5e0a095'),
            ],
        ]);

    }
}
