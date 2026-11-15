<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'XI ' . fake()->randomElement(['PPLG', 'DKV', 'Animasi']) . ' ' . fake()->numberBetween(1, 5),
            'major' => fake()->randomElement(['PPLG', 'DKV', 'Animasi']),
        ];
    }
}
