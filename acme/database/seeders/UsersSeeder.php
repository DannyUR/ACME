<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name"=>'Danny',
            "father_last_name"=> 'Uscanga',
            "mother_last_name"=> 'Reyes',            
            "email"=> 'jsjs@gmail.com',
            "password"=>Hash::make('123'), //encriptar contraseña
            "phone_number"=>'6361099492',
            "address"=>'klsdowewnjnvwenvinec',
            "user_name"=>'Aik0',
            "img"=>"default.jpg",
            "level"=>'1',
            'created_at'=>date('Y-m-d h:m:s') 
        ]);
             DB::table('users')->insert([
            "name"=>'Pamela',
            "father_last_name"=> 'Garcia',
            "mother_last_name"=> 'Tarelo',      
            "email"=> 'PameIGT@gmil.com',
            "password"=>Hash::make('123'), //encriptar contraseña
            "phone_number"=>'6361067899',
            "address"=>'klsdowewnjnvwenvinec',
            "user_name"=>'Pame',
            "img"=>"default.jpg",
            "level"=>'2',
            'created_at'=>date('Y-m-d h:m:s') 
        ]);
    }
}