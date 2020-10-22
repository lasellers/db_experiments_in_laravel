<?php

namespace Database\Factories;

use App\Models\StudentCourse;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentCourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = StudentCourse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        return [
            'student_id' => random_int(0, 3),
            'course_id' => random_int(0, 3)
        ];
    }
}
