<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid,
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'website' => $this->faker->url,
        ];
    }
}
