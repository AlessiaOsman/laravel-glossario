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
            'name' => 'pippo',
            'email' => 'pippo@gmail.com',
        ]);
        $this->call(WordSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(LinkSeeder::class);
    }
}