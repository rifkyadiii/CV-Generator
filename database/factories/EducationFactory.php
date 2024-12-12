<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CV;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EducationFactory extends Factory
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
            'EducationInstitute' => $this->faker->company(),
            'AcademicalDegree' => $this->faker->randomElement(['Bachelor', 'Master', 'PhD']),
            'DateEnrolled' => $this->faker->date(),
            'DateFinished' => $this->faker->optional()->date(),
            'Major' => $this->faker->word(),
            'GPA' => $this->faker->optional()->randomFloat(2, 0.0, 4.0),
        ];
    }
}
