<?php

namespace Database\Factories;

use App\Models\Section;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('123456789'),
            'phone' => $this->faker->phoneNumber,
            'section_id' => Section::all()->random()->id,
            // 'address' => $this->faker->address,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'price' => $this->faker->randomElement([150,200,300,450,500]),
            'appointments'=>$this->faker->dayOfWeek

        ];
    }
}
