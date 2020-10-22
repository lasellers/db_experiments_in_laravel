<?php

namespace App\Services;

use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentService
{
    /**
     * select s.id,s.last_name,s.middle_name,s.first_name,t.id,
     * t.last_name,t.first_name, t.email, c.course, c.teacher_id as course_teacher,
     * sc.* from students s
     * left join course_student sc on sc.student_id=s.id
     * left join courses c on sc.course_id=c.id
     * left join teachers t on c.teacher_id=t.id
     *
     * @return Student
     */
    public function teachers()
    {
        return DB::table('students')
            ->select(
                'students.id as student_id',
                'students.last_name',
                'students.middle_name',
                'students.first_name',
                'teachers.id as teacher_id',
                'teachers.last_name',
                'teachers.first_name',
                'teachers.email',
                'courses.course',
                'courses.teacher_id as course_teacher_id'
            )
            ->join('course_student', function ($join) {
                $join->on('course_student.student_id', '=', 'students.id');
            })
            ->leftJoin('courses', function ($join) {
                $join->on('course_student.course_id', '=', 'courses.id');
            })
            ->leftJoin('teachers', function ($join) {
                $join->on('courses.teacher_id', '=', 'teachers.id');
            })
            ->get();
    }

    public function teachers2()
    {
       // return Student::with('courses')
       //     ->get();

        return Student::with('courses')
           /* ->leftJoin('course_student', function($query) {
                $query->where('course_student.student_id', 'stuent.id');
            })*/
            ->whereHas('courses', function ($query) {
                $query->where('courses.[0].pivot.student_id', 'id');
            })->get();
    }
}
