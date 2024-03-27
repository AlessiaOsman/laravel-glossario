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
                'label' => 'HTML',
                'color' => 'danger-emphasis'
            ],
            [
                'label' => 'CSS',
                'color' => 'primary'
            ],
            [
                'label' => 'JS',
                'color' => 'warning'
            ],
            [
                'label' => 'VUE',
                'color' => 'success'
            ],
            [
                'label' => 'PHP',
                'color' => 'secondary'
            ],
            [
                'label' => 'SQL',
                'color' => 'info'
            ],
            [
                'label' => 'lARAVEL',
                'color' => 'danger'
            ],
            [
                'label' => 'PROGRAMMAZIONE',
                'color' => 'dark'
            ],
        ];

        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->fill($tag);
            $new_tag->save();
        }
    }
}
