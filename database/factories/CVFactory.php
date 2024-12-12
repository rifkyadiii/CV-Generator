<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\CV;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CV>
 */
class CVFactory extends Factory
{
	 protected $model = CV::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'Firstname' => $this->faker->firstName(),
            'Lastname' => $this->faker->lastName(),
            'Birthdate' => $this->faker->date(),
            'Description' => $this->faker->sentence(),
            'photo' => $this->faker->optional()->imageUrl(),
            'PhoneNumber' => $this->faker->optional()->phoneNumber(),
            'WorkEmail' => $this->faker->optional()->email(),
			'Title'=>$this->faker->word(),
			'Address'=>$this->faker->address()
        ];
    }
}
