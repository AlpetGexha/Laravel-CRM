<?php

namespace Database\Factories;

use App\Enums\PronounsEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
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
            'title' => $this->faker->title,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'preferred_name' => $this->faker->firstName,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'pronouns' => $this->faker->randomElement(PronounsEnum::all()),
        ];
    }
}
