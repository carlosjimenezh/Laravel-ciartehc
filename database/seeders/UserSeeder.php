<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = new User();
        $user->name = 'Prueba';
        $user->email = 'prueba@gmail.com';
        $user->password = '$2y$10$xloGoDNPQViQyFFVEqnA3e7mdf6aBJiogQKHT1aWSU4yUCVHnnI7u';
        $user->save();
    }
}
