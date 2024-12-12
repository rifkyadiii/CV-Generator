<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CV;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ExperienceFactory extends Factory
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
            'JobRole' => $this->faker->jobTitle(),
            'Company' => $this->faker->company(),
            'DateEnrolled' => $this->faker->date(),
            'DateFinished' => $this->faker->optional()->date(),
            'Description' => $this->faker->paragraph(),
        ];
    }
}
