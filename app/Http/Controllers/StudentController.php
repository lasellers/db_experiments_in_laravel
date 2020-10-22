<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function all()
    {
        return Student::with('courses')->get();
    }

    public function getById(StudentRequest $request)
    {
        $id = $request->get('id');
        try {
            return Student::with('courses')->find($id);
        } catch (\Exception $e) {
            return self::returnAPIError($e);
        }
    }

}
