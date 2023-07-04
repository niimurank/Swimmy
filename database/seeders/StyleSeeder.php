<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('styles')->insert([
                'style_name' => '自由形',
                'description' => '自由形',
         ]);
         
        DB::table('styles')->insert([
            'style_name' => '平泳ぎ',
            'description' => '平泳ぎ',
            ]);
            
        DB::table('styles')->insert([
            'style_name' => '背泳ぎ',
            'description' => '背泳ぎ',
         ]);
         
        DB::table('styles')->insert([
            'style_name' => 'バタフライ',
            'description' => 'バタフライ',
         ]);
    }
}
