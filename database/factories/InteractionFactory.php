<?php

namespace Database\Factories;

use App\Enums\InteractionTypeEnum;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interaction>
 */
class InteractionFactory extends Factory
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
            'type' => $this->faker->randomElement(InteractionTypeEnum::all()),
            'content' => $this->faker->paragraph,
            'user_id' => User::factory(),
            'contact_id' => \App\Models\Contact::factory(),
            'project_id' => Project::factory(),
        ];
    }
}
