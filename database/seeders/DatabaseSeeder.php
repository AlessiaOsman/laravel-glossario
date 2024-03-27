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
        \App\Models\Word::factory(10)->create();
        \App\Models\Link::factory(5)->create();

        \App\Models\User::factory()->create([
            'name' => 'pippo',
            'email' => 'pippo@gmail.com',
        ]);
        $this->call(TagSeeder::class);
    }
}
