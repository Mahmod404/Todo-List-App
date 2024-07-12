<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class TodoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->sentence(5),
            'user_id' => User::inRandomOrder()->first()->id,
            'due_date' => '2024-07-14',
        ];
    }
}