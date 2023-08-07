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
            ['time' => 27.54, 'user_id' => 1, 'style_id' => 1, 'distance_id' => 1],
            ['time' => 32.18, 'user_id' => 1, 'style_id' => 2, 'distance_id' => 2],
            // 追加する場合はここにデータを追加
        ];

        foreach ($records as $record) {
            $timeInSeconds = $record['time'];
            $timeInTimeFormat = sprintf('%02d:%02d:%02d', ($timeInSeconds/3600), ($timeInSeconds/60%60), $timeInSeconds%60);

            DB::table('records')->insert([
                'created_at'    => new DateTime(),
                'updated_at'    => new DateTime(),
                'time'          => $timeInTimeFormat, // 時間形式に変換
                'user_id'       => $record['user_id'],
                'style_id'      => $record['style_id'],
                'distance_id'   => $record['distance_id'],
            ]);
        }
    }
}
