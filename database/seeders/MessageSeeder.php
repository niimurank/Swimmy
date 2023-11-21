<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'body' => 'テストメッセージ１',
            'user_id' => '1',
            'room_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         
         DB::table('messages')->insert([
            'body' => 'テストメッセージ2',
            'user_id' => '2',
            'room_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
    }
}
