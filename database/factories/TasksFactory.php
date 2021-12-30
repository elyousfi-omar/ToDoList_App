<?php

namespace Database\Factories;
use App\Models\Tasks;
use Illuminate\Database\Eloquent\Factories\Factory;

class TasksFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'period' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
        ];
    }
}
