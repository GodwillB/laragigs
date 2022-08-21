<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\listing>
 */
class listingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'laravel,laravel,laravel-5.8',
            'company' => $this->faker->company,
            'email' => $this->faker->email,
            'website' => $this->faker->url,
            // 'location' => $this->faker->city,
            'description' => $this->faker->paragraph(4),
        ];
    }
}