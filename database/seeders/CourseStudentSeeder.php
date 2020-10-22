<?php

namespace Database\Seeders;

use App\Models\CourseStudent;
use Illuminate\Database\Seeder;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseStudent::create([
            'student_id' => 1,
            'course_id' => 1
        ]);
        CourseStudent::create([
            'student_id' => 1,
            'course_id' => 2
        ]);
        CourseStudent::create([
            'student_id' => 2,
            'course_id' => 1
        ]);
        CourseStudent::create([
            'student_id' => 2,
            'course_id' => 1
        ]);
        CourseStudent::create([
            'student_id' => 2,
            'course_id' => 2
        ]);
        CourseStudent::create([
            'student_id' => 2,
            'course_id' => 3
        ]);
        CourseStudent::create([
            'student_id' => 2,
            'course_id' => 4
        ]);
        CourseStudent::create([
            'student_id' => 3,
            'course_id' => 3
        ]);
    }
}
