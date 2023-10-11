<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = [
            [
                "name" => "bintang",
                "email" => "muhbintang650@gmail.com",
                "password" => bcrypt('trikac16'),
                "level" => "admin",
            ],
            [
                "name" => "fery",
                "email" => "fery123@gmail.com",
                "password" => bcrypt('trikac16'),
                "level" => "user",
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
