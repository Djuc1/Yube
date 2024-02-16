<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'tags' => 'Python, api, flask',
            'company' => fake()->company(),
            'email' => fake()->unique()->safeEmail(),
            'website' => fake()->url(),
            'location' => fake()->city(),
            'description' => fake()->paragraph(5),            


        ];
    }
}
