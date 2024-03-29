<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            StyleSeeder::class,
            DistanceSeeder::class,
            UserSeeder::class,
            RecordSeeder::class,
            PostSeeder::class,
            CommentSeeder::class,
            RoomSeeder::class,
            MessageSeeder::class,
            Room_UserSeeder::class,
            ]);
        
    }
}
