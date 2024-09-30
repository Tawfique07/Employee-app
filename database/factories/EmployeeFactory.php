<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'   => fake()->name,
            'job_title'    => fake()->jobTitle,
            'joining_date'  => fake()->date,
            'salary' => fake()->randomFloat(2,1000, 10000),
            'email' => fake()->unique()->safeEmail,
            'mobile_no' => fake()->unique()->phoneNumber,
            'address' => fake()->address,
        ];
    }
}
