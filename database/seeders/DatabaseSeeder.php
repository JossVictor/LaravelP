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
        // \App\Models\User::factory(10)->create();
        \App\Models\cities::factory(32)->create();
        \App\Models\teams::factory(32)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            conferencesSeeder::class
        ]);
        $this->call([
            divisionsSeeder::class
        ]);
        $this->call([
            teamSeeder::class
        ]);
        $this->call([
            teamsSeeder::class
        ]);


        
    }
}
