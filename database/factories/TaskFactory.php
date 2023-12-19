<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'employee_id' => Employee::factory()->create()->id,
        ];
    }
}
