<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "auteur"=>fake()->name(),
            "titre"=>fake()->paragraph(1),
            "content"=>fake()->paragraph(400),
            "image"=>"images/".rand(1,50).".jpg",
            "categorie"=>rand(1,5)
        ];
    }
}
