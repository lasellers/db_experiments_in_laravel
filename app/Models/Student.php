<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * select s.*,c.*,sc.* from students s
     * left join course_student sc on sc.student_id=s.id
     * left join courses c on sc.course_id=c.id
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class);
        //return $this->belongsToMany(StudentCourse::class, 'course_student','student_id','course_id');
        // return $this->hasMany(StudentCourse::class);
    }

    /**
     * select s.id,s.last_name,s.middle_name,s.first_name,t.id,t.last_name,t.first_name, t.email, c.course, c.teacher_id as course_teacher,sc.* from students s
     * left join course_student sc on sc.student_id=s.id
     * left join courses c on sc.course_id=c.id
     * left join teachers t on c.teacher_id=t.id
     *
     */
   /* public function teachers()
    {
        return $this->whereHas(Course::class)
            ->leftJoin('teachers', function ($join) {
                $join->on('teachers.id', '=', 'courses.teacher_id', '=', 'teachers.id');
            });
    }
    */
}
