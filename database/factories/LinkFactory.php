<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => substr($this->faker->sentence(2), 0, -1),
            'url' => $this->faker->url,
            'description' => $this->faker->paragraph,
        ];
    }
}
