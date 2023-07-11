<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            'id'            => 1,
            'created_at'    => new DateTime(),
            'updated_at'    => new DateTime(),
            'time'          => 27.54,
            'user_id'       => 1,
            'style_id'      => 1,
            'distance_id'   => 1,

        ]);
    }
}
