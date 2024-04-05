<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Word>
 */
class WordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        Storage::makeDirectory('img');
        $title = fake()->text(20);
        $slug = Str::slug($title);
        $file = fake()->image(null, 250, 250);
        $url = Storage::putFileAs('img', $file, "$slug.png");
        return [

            'title' => $title,
            'description' => fake()->paragraphs(3, true),
            'image' => $url,
            'slug' => $slug,

        ];
    }
}
