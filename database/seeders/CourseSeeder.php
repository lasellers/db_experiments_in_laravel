<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'course' => 'CSC 50',
            'department' => 'CSC',
            'description' => 'Introduction to Compsci',
            'teacher_id' => 1
        ]);
        Course::create([
            'course' => 'CSC 60',
            'department' => 'CSC',
            'description' => 'History of Compsci',
            'teacher_id' => 1
        ]);
        Course::create([
            'course' => 'H 50',
            'department' => 'H',
            'description' => 'Introduction to World History',
            'teacher_id' => 2
        ]);
        Course::create([
            'course' => 'BIO 50',
            'department' => 'H',
            'description' => 'Introduction to Biology',
            'teacher_id' => 3
        ]);
        Course::create([
            'course' => 'MAT 50',
            'department' => 'M',
            'description' => 'Introduction to Mathematics',
            'teacher_id' => 4
        ]);
    }
}
