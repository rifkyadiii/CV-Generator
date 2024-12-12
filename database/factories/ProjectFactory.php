<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CV;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'cv_id' => CV::factory(),
            'ProjectTitle' => $this->faker->sentence(3),
            'ToolsForProjects' => $this->faker->words(5, true),
            'Projectdescription' => $this->faker->paragraph(),
        ];
    }
}
