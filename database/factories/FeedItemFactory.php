<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FeedItem>
 */
class FeedItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'hash' => $this->faker->md5,
            'title' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'author' => $this->faker->name,
            'url' => $this->faker->url,
            'feed_id' => $this->faker->numberBetween(1, 10),
            'urlToImage' => $this->faker->url,
            'is_read' => $this->faker->boolean,
        ];
    }
}
