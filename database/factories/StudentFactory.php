<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->name,
            'first_name' => $this->faker->name,
            'middle_name' => $this->faker->name,
            'address' => $this->faker->address,
            'state' => $this->faker->state,
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
