<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // array tags
        $tags = [

            [
                'label' => 'Programmazione',
                'color' => 'dark'
            ],
            [
                'label' => 'HTML',
                'color' => 'secondary'
            ],
            [
                'label' => 'CSS',
                'color' => 'primary'
            ],
            [
                'label' => 'Javascript',
                'color' => 'warning'
            ],
            [
                'label' => 'PHP',
                'color' => 'primary-danger'
            ],
            [
                'label' => 'VUE',
                'color' => 'success'
            ],

            [
                'label' => 'SQL',
                'color' => 'info'
            ],
            [
                'label' => 'LARAVEL',
                'color' => 'danger'
            ],

        ];

        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->fill($tag);
            $new_tag->save();
        }
    }
}
