<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slides = [
            [
                'image_path' => 'images/hero/slide1.jpg',
                'title' => 'Welcome to Kalong Pride',
                'description' => 'Little Family With Big Memorys',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'image_path' => 'images/hero/slide2.jpg',
                'title' => 'Our Journey',
                'description' => 'Moments that matter',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'image_path' => 'images/hero/slide3.jpg',
                'title' => 'Together Forever',
                'description' => 'Creating memories together',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'image_path' => 'images/hero/slide4.jpg',
                'title' => 'Family Moments',
                'description' => 'Cherishing every moment',
                'order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($slides as $slide) {
            HeroSlide::create($slide);
        }
    }
}
