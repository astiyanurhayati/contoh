<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recipe>
 */
class RecipeFactory extends Factory
{    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $judul = $this->faker->sentence;
        return [
            "judul" =>$judul, 
            "prep_time" => $this->faker->numberBetween(5, 60), 
            'cook_time' => $this->faker->numberBetween(10, 120), 
            'kategori_resep_id' => $this->faker->numberBetween(1, 3), 
            'kesulitan' =>$this->faker->randomElement(['Mudah', 'Sedang', 'Sulit']), 
            'desk' => $this->faker->paragraph, 
            'gambar' => $this->faker->imageUrl(640, 480, 'food'), 
            'slug' =>  Str::slug($judul), 
            'resep' => $this->faker->paragraph
        ];
    }
}
