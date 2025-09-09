<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArchitecturaldrawingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('architectural_drawings')->insert([
            "name"=>'Plano Estructural 1',
            "description"=> 'Primer plano estructural del proyecto',
            "darwing_file"=> 'plano_estructural_1.pdf' ,
            "project_id"=> '1' ,                        
            "version"=>'2',
            'created_at'=>date('Y-m-d h:m:s') 
        ]);
        DB::table('architectural_drawings')->insert([
            "name"=>'Plano Arquitectonico 1',
            "description"=> 'Primer plano arquitectonico del proyecto',
            "darwing_file"=> 'plano_arquitectonico_1.pdf' ,
            "project_id"=> '' ,                        
            "version"=>'6',
            'created_at'=>date('Y-m-d h:m:s') 
        ]);        
    }
}
