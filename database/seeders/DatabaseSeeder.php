<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       for ($i=0; $i < 100 ; $i++) { 
            User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'created_at' => now(),
                'password' => Hash::make('12345678'),
            ])->givePermissionTo(fake()->randomElements(['admin', 'user']));
       }


        // \App\Models\User::factory(10)->make(function($user){
        //     return $user->givePermissionTo(fake()->randomElements(['admin','user']));
        // });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
