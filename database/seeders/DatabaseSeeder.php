<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'id' => 1,
            'name' => 'Alexandre M.',
            'is_admin' => 1,
            'email' => 'test@example.com',
        ]);

        \App\Models\User::factory(15)->create();
        \App\Models\Customer::factory(15)->create();
        \App\Models\Room::factory(15)->create();
        \App\Models\Reservation::factory(15)->create(['user_id' => 1]);





        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
