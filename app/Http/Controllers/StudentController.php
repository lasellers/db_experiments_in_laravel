<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Student::with('courses')->get();
    }

    /**
     * @param StudentRequest $request
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse|null
     */
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
