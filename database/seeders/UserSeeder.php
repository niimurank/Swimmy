<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'テストユーザー',
            'email' => 'test@test.test',
            'password' => bcrypt('testpassword'),
            'birthday' => new DateTime(),
            'sex' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
         DB::table('users')->insert([
            'name' => 'テスト太郎',
            'email' => 'test2@test.test',
            'password' => bcrypt('testpassword'),
            'birthday' => new DateTime(),
            'sex' => 2,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
    }
}
