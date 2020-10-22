<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TeacherController extends Controller
{
    public function all()
    {
        return Teacher::with('courses')->get();
    }

    public function getById(TeacherRequest $request)
    {
        $id = $request->get('id');
        try {
            return Teacher::with('courses')->findOrFail($id);
        } catch (\Exception $e) {
            return self::returnAPIError($e);
        }
    }

    /*
    public function getAll(Request $request)
    {
        try {
            $comments = Teacher::with(['patient', 'practitioner'])
                ->orderBy('id', 'desc')
                ->get();
            return response()->json($comments->toArray());
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Teacher lookup error ' . $e->getMessage(),
                Response::HTTP_INTERNAL_SERVER_ERROR
            ]);
        }
    }
    */
}
