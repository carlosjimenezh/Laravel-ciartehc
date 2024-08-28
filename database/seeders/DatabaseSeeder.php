<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user = new User();
        $user->name = 'Prueba';
        $user->email = 'prueba@gmail.com';
        $user->password = '$2y$10$xloGoDNPQViQyFFVEqnA3e7mdf6aBJiogQKHT1aWSU4yUCVHnnI7u';
        $user->save();

        $this->call([
            LineasInvestigacionSeeder::class,
            TeamSeeder::class,
        ]);
    }
}
