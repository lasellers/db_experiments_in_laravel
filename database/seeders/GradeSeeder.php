<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::create([
            'student_id' => 1,
            'grade' => 100,
            'letter_grade' => 'A',
            'course_id' => 1
        ]);
        Grade::create([
            'student_id' => 1,
            'grade' => 100,
            'letter_grade' => 'A',
            'course_id' => 2
        ]);
        Grade::create([
            'student_id' => 2,
            'grade' => 100,
            'letter_grade' => 'A',
            'course_id' => 1
        ]);
        Grade::create([
            'student_id' => 2,
            'grade' => 100,
            'letter_grade' => 'A',
            'course_id' => 2
        ]);
    }
}
