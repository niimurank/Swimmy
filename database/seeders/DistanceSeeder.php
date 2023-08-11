<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DistanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distances')->insert([
            'id' => 1,
            'swim_distance' => 25,
        ]);
        
        DB::table('distances')->insert([
            'id' => 2,
            'swim_distance' => 50,
        ]);
        
        DB::table('distances')->insert([
            'id' => 3,
            'swim_distance' => 100,
        ]);
        
        DB::table('distances')->insert([
            'id' => 4,
            'swim_distance' => 200,
        ]);
    }
}
