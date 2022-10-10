<?php

namespace Database\Factories\User;

use App\Models\Gender;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserGenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->randomElement(User::all())['id'],
            'gender_id' => fake()->randomElement(Gender::all())['id'],
        ];
    }
}
