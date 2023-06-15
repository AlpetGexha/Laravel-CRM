<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
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
            'title' => $this->faker->sentence(2),
            'body' => $this->faker->paragraph,
            'deadline' => $this->faker->dateTimeBetween('now', '+1 year'),
            'status' => $this->faker->randomElement(['draft', 'published']),
            'user_id' => User::factory(),
            // 'company_id' => '',
            // 'team_id' => '',
            // 'department_id' => '',
        ];
    }
}
