<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id'            => 1,
            'body'          => '初の大会緊張しました。',
            'record_id'     => 1,
            'user_id'       => 1,
            'created_at'    => new DateTime(),
            'updated_at'    => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'id'            => 2,
            'body'          => '２回目の大会でした。タイムは変わりませんでした。',
            'record_id'     => 1,
            'user_id'       => 1,
            'created_at'    => new DateTime(),
            'updated_at'    => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'id'            => 3,
            'body'          => '別の競技に出場しました。',
            'record_id'     => 2,
            'user_id'       => 1,
            'created_at'    => new DateTime(),
            'updated_at'    => new DateTime(),
        ]);
    }
}
