<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'filename' => $this->faker->imageUrl(640, 480, 'cats'),
            'imageable_id' => Doctor::all()->random()->id,
            'imageable_type' => $this->faker->randomElement(['App\Models\Doctor']),
        ];
    }
}
