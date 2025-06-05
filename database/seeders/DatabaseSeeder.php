<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\TagSeeder; // importa esto o si no da error

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            TagSeeder::class,
        ]); // Add other seeders here inside the array

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

    }
}
