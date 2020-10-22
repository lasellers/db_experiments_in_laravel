<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Grade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition()
    {
        mt_srand(hrtime(true));
        $grade = random_int(0, 100);
        $letters = [0 => 'F', 1 => 'F', 2 => 'F', 3 => 'F', 4 => 'F', 5 => 'F', 6 => 'D', 7 => 'C', 8 => 'B', 9 => 'A', 10 => 'A'];
        $letter_grade = $letters[(int)($grade / 10)];
        return [
            'course_id' => random_int(0, 5),
            'grade' => $grade,
            'letter_grade' => $letter_grade,
            'teacher_id' => random_int(0, 5),
        ];
    }
}
