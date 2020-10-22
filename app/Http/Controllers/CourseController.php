<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function all()
    {
        return Course::with(['teacher'])->get();
    }

    public function getById(CourseRequest $request)
    {
        $id = $request->get('id');
        try {
            return Course::with('teacher')->findOrFail($id);
        } catch (\Exception $e) {
            return self::returnAPIError($e);
        }
    }

}
