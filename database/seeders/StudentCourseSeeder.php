<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentCourse::create([
            'student_id' => 1,
            'course_id' => 1
        ]);
        StudentCourse::create([
            'student_id' => 1,
            'course_id' => 2
        ]);
        StudentCourse::create([
            'student_id' => 2,
            'course_id' => 1
        ]);
        StudentCourse::create([
            'student_id' => 2,
            'course_id' => 1
        ]);
        StudentCourse::create([
            'student_id' => 2,
            'course_id' => 2
        ]);
        StudentCourse::create([
            'student_id' => 2,
            'course_id' => 3
        ]);
        StudentCourse::create([
            'student_id' => 2,
            'course_id' => 4
        ]);
        StudentCourse::create([
            'student_id' => 3,
            'course_id' => 3
        ]);
    }
}
