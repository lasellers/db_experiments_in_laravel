<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        return [
            'course' => $this->faker->company.' '.random_int(1,600),
            'department' => $this->faker->jobTitle,
            'description' => $this->faker->realText(80),
            'teacher_id' => random_int(0, 8),
        ];
    }
}
