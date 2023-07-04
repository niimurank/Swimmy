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
            'Name' => 'テスト太郎',
            'Email' => 'test@test.test',
            'password' => bcrypt('testpassword'),
            'birthday' => new DateTime(),
            'sex' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
         ]);
    }
}
