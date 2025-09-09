<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            "drawing_id"=>'1',
            "comment"=> 'hay que mejorar',
            "review_date"=> '2025-03-02' ,
            "architect_id"=> '1' ,                        
            'created_at'=>date('Y-m-d h:m:s') 
        ]);
        DB::table('reviews')->insert([
            "drawing_id"=>'2',
            "comment"=> 'hay que mejorar',
            "review_date"=> '2025-03-02' ,
            "architect_id"=> '2' ,                        
            'created_at'=>date('Y-m-d h:m:s') 
        ]);        
    }
}
