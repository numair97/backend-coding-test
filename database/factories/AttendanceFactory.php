<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendance>
 */
class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'check_in' => fake()->dateTime(),
            'check_out' => fake()->dateTime(),
            'total_hours' => fake()->numberBetween(11,20),
            'employee_id' => fake()->numberBetween(1, 10),
            'schedule_id' => fake()->numberBetween(1,2),
        ];
    }
}
