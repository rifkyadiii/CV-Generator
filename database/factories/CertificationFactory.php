<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CV;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CertificationFactory extends Factory
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
            'CertificationTitle' => $this->faker->sentence(3),
            'IssuedBy' => $this->faker->company(),
            'SkillSets' => $this->faker->words(5, true),
        ];
    }
}
