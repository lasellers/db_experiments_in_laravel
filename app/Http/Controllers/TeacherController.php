<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeacherController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Teacher::with('courses')->get();
    }

    /**
     * @param TeacherRequest $request
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|\Illuminate\Http\JsonResponse
     */
    public function getById(TeacherRequest $request)
    {
        $id = $request->get('id');
        try {
            return Teacher::with('courses')->findOrFail($id);
        } catch (\Exception $e) {
            return self::returnAPIError($e);
        }
    }
}
