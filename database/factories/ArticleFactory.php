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
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'content' => $this->getParagraphs(),
            'author_id' => fake()->numberBetween(1, 15),
        ];
    }

    private function getParagraphs(): string
    {
        $content = '';
        for($x = 0; $x < rand(3,8) ; $x++) {
            $content .= '<p>'.fake()->realTextBetween(100,450).'</p>';
        }

        return $content;
    }
}
