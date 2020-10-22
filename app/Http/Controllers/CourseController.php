<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Course::with(['teacher'])->get();
    }

    /**
     * @param CourseRequest $request
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse
     */
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
