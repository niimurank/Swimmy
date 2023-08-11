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
        $records = [
            ['time' => 27.54, 'user_id' => 1, 'style_id' => 1, 'distance_id' => 1, 'longcorse' => 1],
            ['time' => 32.18, 'user_id' => 1, 'style_id' => 2, 'distance_id' => 2, 'longcorse' => 0],
            // 追加する場合はここにデータを追加
        ];

        foreach ($records as $record) {
            $timeInSeconds = $record['time'];

            DB::table('records')->insert([
                'created_at'    => new DateTime(),
                'updated_at'    => new DateTime(),
                'time'          => $timeInSeconds,
                'time_at'       => new DateTime(),
                'user_id'       => $record['user_id'],
                'style_id'      => $record['style_id'],
                'distance_id'   => $record['distance_id'],
                'longcorse'     => $record['longcorse'],
            ]);
        }
    }
}
