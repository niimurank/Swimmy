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
            'swim_distance' => 50,
            'longcorse' => '0',
        ]);
        
        DB::table('distances')->insert([
            'swim_distance' => 50,
            'longcorse' => '1',
        ]);
        
        DB::table('distances')->insert([
            'swim_distance' => 100,
            'longcorse' => '0',
        ]);
        
        DB::table('distances')->insert([
            'swim_distance' => 100,
            'longcorse' => '1',
        ]);
        
        DB::table('distances')->insert([
            'swim_distance' => 200,
            'longcorse' => '0',
        ]);
        
        DB::table('distances')->insert([
            'swim_distance' => 200,
            'longcorse' => '1',
        ]);
    }
}
