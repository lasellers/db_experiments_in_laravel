<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    use HasFactory;

    public $timestamps = false;
    //protected $table = 'course_student';

    public function students() {
        return $this->hasMany(Course::class, 'course_id', 'id');
    }

    public function courses() {
        return $this->hasMany(Student::class, 'student_id', 'id');
    }

}
