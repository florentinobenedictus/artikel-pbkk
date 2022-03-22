<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
			'slug' => $this->faker->unique()->slug(),
			'excerpt' => $this->faker->sentence(mt_rand(10,25)),
			'body' => $this->faker->paragraph(mt_rand(5,10)),
			'user_id' => mt_rand(1,10),
			'category_id' => mt_rand(1,3),
			'author' => $this->faker->name()
        ];
    }
}
