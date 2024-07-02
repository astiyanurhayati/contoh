<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{

    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'body' => $this->faker->paragraphs(3, true),
            'gambar' => $this->faker->imageUrl,
            'label' => $this->faker->words(3, true),
            'excerpt' => $this->faker->paragraph,
            'meta_key' => $this->faker->words(5, true),
            'categoryblog_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
