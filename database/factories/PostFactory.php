<?php

namespace Database\Factories;

use App\Models\Category;
//use http\Client\Curl\User;
use App\Models\User;
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
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'slug' => $this->faker->slug($nbWords = 6, $variableNbWords = true),
            'excerpt' => '<p>' . $this->faker->realText($maxNbChars = 200, $indexSize = 2) . '</p>',
            'body' => '<p>' . $this->faker->realText($maxNbChars = 1000, $indexSize = 2) . '</p>',


            'thumbnail' => 'https://picsum.photos/640/480?random=' . $this->faker->unique()->numberBetween($min = 1, $max = 1000),
        ];
    }
}
