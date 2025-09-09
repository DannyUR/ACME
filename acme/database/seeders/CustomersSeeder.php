<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('customers')->insert([
            "rfc"=>'USED991127643',
            "user_id"=>'1',
            'created_at'=>date('Y-m-d h:m:s') 
        ]);
        DB::table('customers')->insert([
            "rfc"=>'GAAP041107553',
            "user_id"=>'1',
            'created_at'=>date('Y-m-d h:m:s') 
        ]);
    }
}
